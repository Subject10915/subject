<?php

use Carbon\Carbon;
//定義日期
$datetime = Carbon::now();
//定義時間
$time = date("H:i:s");
//設定定義星期陣列
$week=array("日","一","二","三","四","五","六");
//設定 年-月-日
$date = date("Y-m-d");

?>

@extends('admin.layouts.master')

@section('title', '偵測進入教室名單')

@section('content')

<!-- Page Heading -->
<body style="background-color:white;">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            偵測進入教室名單 <small>管理教室</small>
            <small style="text-align: right"><?php echo Carbon::now()->toDateString(), "星期".$week[date("w")]; ?></small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 教室管理
            </li>
        </ol>
    </div>
</div>

<!-- /.row -->
<div>
    <div class="row">
        <div class="col-lg-8 mx-auto mb-4">
            <h2 style="font-family: 微軟正黑體">門鎖偵測</h2>
        </div>
    </div>
</div>

    <a href="{{route('admin.status.detect')}}" class="btn btn-success" style="text-align: center;background-color:#FFFFFF;color:#0000D1;font-size:large;border:3px black">
        偵測
    </a>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="70" style="text-align: center">編號</th>
                        <th style="text-align: center">使用者姓名</th>
                        <th style="text-align: center">教室名稱</th>
                        <th style="text-align: center">進入日期時間</th>
                        <th style="text-align: center">預計離開日期時間</th>
                        <th style="text-align: center">教室狀態</th>
                        <th style="text-align: center">門</th>
                        <th style="text-align: center">警報器</th>
                    </tr>
                </thead>
                <tbody>
                    {{--新增 上課教室 或 預約教室 的使用者--}}
                    @foreach($users as $user)
                        @foreach($students as $student)
                            @foreach($rooms as $room)
                                @if($user->id == 3 && $user->id == $student->user_id )
                                    @foreach ($courses as $course)
                                        @foreach ($studentitems as $studentitem)
                                            @foreach ($classitems as $classitem)
                                                @foreach($stutimetables as $stutimetable)
                                                    @foreach ($classtimetables as $classtimetable)
                                                        @if (($course->id == $classitem->course_id && $course->id == $studentitem->coure_id) && $classtimetable->id == $classitem->class_timetable_id && $stutimetable->id == $studentitem->stu_timetable_id && ($room->id == $course->room_id && $room->id == $classtimetable->room_id))
                                                            @foreach($schedules as $schedule)
                                                                @if ($datetime->between($schedule->starttime,$schedule->endtime) && (date("w") == $stutimetable->day && $classtimetable->day) && ($schedule->id == $stutimetable->session && $stutimetable->session == $classtimetable->session))
                                                                    <tr>
                                                                        <td>{{$user->id}}</td>
                                                                        <td>{{$user->name}}</td>
                                                                        <td>{{$room->name}}</td>
                                                                        <td>{{$datetime}}</td>
                                                                        <td>{{$schedule->endtime}}</td>
                                                                        <td>{{"電源已打開"}}</td>
                                                                        <td>{{"1"}}</td>
                                                                        <td>{{"0"}}</td>
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            @endforeach
                                        @endforeach
                                    @endforeach
                                @endif
                                {{--新增預約使用者--}}
                                @foreach ($grades as $grade)
                                    @if (($user->id == 1 xor $user->id == 2 xor $user->id == 3 xor $user->id == 4) && $user->id == $student->user_id && $grade->id == $student->grade_id)
                                        @foreach ($books as $book)
                                            @foreach ($items as $item)
                                                @if ($book->user_id == $user->id && $datetime->between($book->indatetime, $book->outdatetime) && $item->book_id == $book->id && $item->room_id == $room->id)
                                                    <tr>
                                                        <td>{{$user->id}}</td>
                                                        <td>{{$user->name}}</td>
                                                        <td>{{$room->name}}</td>
                                                        <td>{{$datetime}}</td>
                                                        <td>{{$book->outdatetime}}</td>
                                                        <td>{{"電源已打開"}}</td>
                                                        <td>{{"開"}}</td>
                                                        <td>{{"關"}}</td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div>
    <div class="row">
        <div class="col-lg-8 mx-auto mb-4">
            <h2 style="font-family: 微軟正黑體">教室警報器</h2>
        </div>
    </div>
</div>
<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="70" style="text-align: center">編號</th>
                            <th style="text-align: center">使用者姓名</th>
                            <th style="text-align: center">教室名稱</th>
                            <th style="text-align: center">教室使用狀態</th>
                            <th style="text-align: center">進入日期時間</th>
                            <th style="text-align: center">離開日期時間</th>
                            <th style="text-align: center">門鎖狀態</th>
                            <th style="text-align: center">警報器狀態</th>
                            <th style="text-align: center">管理</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stas as $sta)
                            @if($sta->buzzer==1)
                                @foreach($users as $user)
                                    @if($user->id==$sta->user_id)
                                        @foreach($rooms as $room)
                                            @if($sta->room_id==$room->id)
                                                <tr>
                                                    <td>{{$sta->id}}</td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$room->name}}</td>
                                                    <td>{{$sta->immediate}}</td>
                                                    <td>{{$sta->indaretime}}</td>
                                                    <td>{{$sta->outdatetime}}</td>
                                                    @if($sta->door ==1)
                                                        <td>{{"開"}}</td>
                                                    @else
                                                        <td>{{"關"}}</td>
                                                    @endif
                                                    @if($sta->buzzer ==1)
                                                        <td>{{"開"}}</td>
                                                    @else
                                                        <td>{{"關"}}</td>
                                                    @endif
                                                    <td style="text-align: center">
                                                        @if($sta->buzzer==1)
                                                            <!-- 編輯資料 -->
                                                            <a href="{{ route('admin.status.detectedit',$sta->id) }}">關閉</a>
                                                        @endif
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
            </div>
        </div>
    </div>
</div>
</body>
<!-- /.row -->
@endsection
