@extends('admin.layouts.master')

@section('title', '調課管理')

@section('content')
<!-- Page Heading -->
<body style="background-color:white;">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            調課管理 <small>調課資訊</small>
        </h1>
        <span style="font-size:large;">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> 調課管理
            </li>
        </ol>
        </span>
    </div>
</div>
<!-- /.row -->

<div class="row" style="margin-bottom: 20px; text-align: right">
    <div class="col-lg-12">
        <span style="font-size:large;">
        <a href="{{ route('admin.change.create') }}" class="btn btn-success" style="background-color:#FFFFFF;color:#0000D1;font-size:large;border:3px black">
            新增調課資訊
        </a>
        </span>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th style="text-align: center">編號</th>
                        <th style="text-align: center">申請人姓名</th>
                        <th style="text-align: center">教室名稱</th>
                        <th style="text-align: center">課程名稱</th>
                        <th style="text-align: center">授課教師</th>
                        <th style="text-align: center">異動前日期</th>
                        <th style="text-align: center">異動前節次</th>
                        <th style="text-align: center">異動後日期</th>
                        <th style="text-align: center">異動後節次</th>
                        <th style="text-align: center">審核狀態</th>
                        <th style="text-align: center">調課管理</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($changes as $change)
                    @foreach($users as $user)
                        @if($user->id==$change->user_id)
                            @foreach($rooms as $room)
                                @if($change->room_id==$room->id)
                                    @foreach($courses as $course)
                                        @if($change->course_id==$course->id)
                                            <tr>
                                                <td>{{$change->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$room->name}}</td>
                                                <td>{{$course->name}}</td>
                                                <td>{{$course->teacher}}</td>
                                                <td>{{$change->before_day}}</td>
                                                <td>{{$change->before_session}}</td>
                                                <td>{{$change->after_day}}</td>
                                                <td>{{$change->after_session}}</td>
                                                @if($change->status=="0")
                                                    <td>審核中</td>
                                                @elseif($change->status=="1")
                                                    <td>通過</td>
                                                @elseif($change->status=="2")
                                                    <td>未通過</td>
                                                @endif
                                                <td >
                                                    <a href="{{route('admin.change.edit',$change->id)}}">
                                                        <button type="submit" class="btn btn-success"  style="background-color:#FFFFFF;color:#0000D1;border:3px black">
                                                            編輯
                                                        </button>
                                                    </a>
                                                    /
                                                    <a href="/admin/change/{{ $change->id }}">
                                                        <button type="submit" class="btn btn-success"  style="background-color:#FFFFFF;color:#FF0000;border:3px black">
                                                            刪除
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.row -->

<div class="text-right">
    <form action="{{ route('admin.dashboard.index')}}" method="GET">
        <button type="submit" class="btn btn-success" style="background-color:#FFFFFF;color:#0000D1;border:3px black;font-size:large">回首頁</button>
    </form>
</div>
<!-- /.row -->
</body>

@endsection
