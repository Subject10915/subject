@extends('admin.layouts.master')

@section('title', '確認刪除')

@section('content')
<!-- Page Heading -->
<body style="background-color:white;">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            確認刪除 <small>您是否確定刪除該筆資料</small>
        </h1>
        <span style="font-size:large;">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 確認刪除
            </li>
        </ol>
        </span>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
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
            </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    @if($user->id==$changes->user_id)
                        @foreach($rooms as $room)
                            @if($changes->room_id==$room->id)
                                @foreach($courses as $course)
                                    @if($changes->course_id==$course->id)
                                        <tr>
                                            <td>{{$changes->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$room->name}}</td>
                                            <td>{{$course->name}}</td>
                                            <td>{{$course->teacher}}</td>
                                            <td>{{$changes->before_day}}</td>
                                            <td>{{$changes->before_session}}</td>
                                            <td>{{$changes->after_day}}</td>
                                            <td>{{$changes->after_session}}</td>
                                            @if($changes->status=="0")
                                                <td>審核中</td>
                                            @elseif($changes->status=="1")
                                                <td>通過</td>
                                            @elseif($changes->status=="2")
                                                <td>未通過</td>
                                            @endif
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </tbody>
        </table>
        <div class="text-right">
            <form action="/admin/change/{{$changes->id}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-success" style="background-color:#FFFFFF;color:#FF0000;border:3px black;font-size:large">刪除</button>
            </form>
        </div>
        <div class="text-right">
            <BR>
        </div>
        <div class="text-right">
            <form action="{{ route('admin.change.index', $changes->id) }}" method="GET">
                <button type="submit" class="btn btn-success" style="background-color:#FFFFFF;color:#0000D1;border:3px black;font-size:large">返回</button>
            </form>
        </div>
    </div>
</div>
</body>
<!-- /.row -->
@endsection
