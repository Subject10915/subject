@extends('admin.layouts.master')

@section('title', '編輯調課資訊')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            編輯調課 <small>修改編輯調課資訊</small>
        </h1>
        <span style="font-size:large;">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 調課管理
            </li>
        </ol>
        </span>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('admin.change.adminupdate', $changes->id) }}" method="POST" role="form">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

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
                                            <td>
                                                <select name="status" class="form-control" value="{{$changes->status}}">
                                                    <option value=" "> </option>
                                                    <option value="0">審核中</option>
                                                    <option value="1">通過</option>
                                                    <option value="2">未通過</option>
                                                </select>
                                            </td>
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
                <button type="submit" class="btn btn-success" style="background-color:#FFFFFF;color:#0000D1;border:3px black;font-size:large">更新</button>
            </div>
        </form>
        <div class="text-right">
        <form action="{{ route('admin.change.index', $changes->id) }}" method="GET">
            <button type="submit" class="btn btn-success" style="background-color:#FFFFFF;color:#0000D1;border:3px black;font-size:large">返回</button>
        </form>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection
