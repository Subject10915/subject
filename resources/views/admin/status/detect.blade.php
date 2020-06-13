<?php

use Carbon\Carbon;
//定義日期
$datetime = Carbon::now();
//定義時間
$time = date("H:i:s");
//設定定義星期陣列
$week=array("日","一","二","三","四","五","六");

$date = date("Y-m-d");

//設定定義上課時間(時)陣列 1~8節
$starttime = array('08','09','10','11','13','14','15','16','17');

//設定定義下課時間(時)陣列 1~8節
$endtime = array('09','10','11','13','14','15','16','17','18');

//Carbon::create(null, $month, $day, $hour, $minute, $second);
$start_setime = array(1,2,3,4,5,6,7,8,9,10);
$end_setiem = array(1,2,3,4,5,6,7,8,9,10);

for ($a=0;$a<=8;$a++)
{
    $start_setime[$a] = Carbon::create($date,$starttime[$a],10,00);
}
for ($b=0;$b<=8;$b++)
{
    $end_setiem[$b] = Carbon::create($date,$endtime[$b],00,00);
}

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
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <button class="btn btn-primary text-white" style="font-size: medium " name="1" >偵測</button>
    </form>
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
{{--                @foreach($users as $user)--}}
{{--                    @foreach($students as $student)--}}
{{--                        @foreach($grades as $grade)--}}
{{--                            @if($user->id==3 && $user->id==$student->id && $grade->id==$student->grade_id)--}}
{{--                                @foreach($courses as $course)--}}
{{--                                    @foreach($classrooms as $classroom)--}}
{{--                                        @foreach($rooms as $room)--}}
{{--                                            @if($course->student_id==$student->id && $course->subject==$classroom->subject && $datetime->between($course->starttime,$course->endttime) && date("w")==$course->week && $classroom->room_id==$room->id)--}}
{{--                                                <tr>--}}
{{--                                                    <td>{{$user->id}}</td>--}}
{{--                                                    <td>{{$user->name}}</td>--}}
{{--                                                    <td>{{$room->name}}</td>--}}
{{--                                                    <td>{{$time}}</td>--}}
{{--                                                    <td>{{$course->starttime}}</td>--}}
{{--                                                    <td>{{$course->endttime}}</td>--}}
{{--                                                    <td>{{$week[date("w")]}}</td>--}}
{{--                                                </tr>--}}
{{--                                            @endif--}}
{{--                                        @endforeach--}}
{{--                                    @endforeach--}}
{{--                                @endforeach--}}
{{--                            @endif--}}
{{--                            @if(($user->id==1 xor $user->id==2 xor $user->id==3 xor $user->id==4) && $user->id==$student->id && $grade->id==$student->grade_id)--}}
{{--                                @foreach($books as $book)--}}
{{--                                    @foreach($rooms as $room)--}}
{{--                                        @foreach($items as $item)--}}
{{--                                            @if($book->user_id == $user->id && $datetime->between($book->indatetime, $book->outdatetime) && $item->book_id == $book->id && $item->room_id == $room->id)--}}
{{--                                                <tr>--}}
{{--                                                    <td>{{$user->id}}</td>--}}
{{--                                                    <td>{{$user->name}}</td>--}}
{{--                                                    <td>{{$room->name}}</td>--}}
{{--                                                    <td>{{$datetime}}</td>--}}
{{--                                                    <td>{{$book->indatetime}}</td>--}}
{{--                                                    <td>{{$book->outdatetime}}</td>--}}
{{--                                                    <td>{{$week[date("w")]}}</td>--}}
{{--                                                </tr>--}}
{{--                                            @endif--}}
{{--                                        @endforeach--}}
{{--                                    @endforeach--}}
{{--                                @endforeach--}}
{{--                            @endif--}}
{{--                        @endforeach--}}
{{--                    @endforeach--}}
{{--                @endforeach--}}
                    {{--新增 上課教室 或 預約教室 的使用者--}}
                    @foreach($users as $user)       {{--使用者4--}}
                        @foreach($students as $student)     {{--使用者4--}}
{{--                            @foreach($studentitems as $studentitem)     --}}{{--學生明細--}}
{{--                                @if($user->id == 4 && $user->id == $student->use_id && $user->id == $stuTimetable->uesr_id)--}}
{{--                                    @foreach($rooms as $room)--}}
{{--                                        @foreach ($stuTimetables as $stuTimetable)      --}}{{--學生時課表--}}
{{--                                            @foreach ($courses as $course)      --}}{{--課程--}}
{{--                                                @foreach ($classitems as $classitem)        --}}{{--教室明細--}}
{{--                                                    @foreach ($classtimetables as $classtimetable)      --}}{{--教室時刻表--}}
{{--                                                        @if (($course->id == $classitem->course_id && $course->id == $studentitem->coure_id) && $stuTimetable->id == $studentitem->stu_timetable_id && $classtimetable->id == $classitem->class_timetable_id && ($room->id == $classtimetable->room_id && $room->id == $course->room_id) )--}}
{{--                                                            <tr>--}}
{{--                                                                <td>{{$user->id}}</td>--}}
{{--                                                                <td>{{$user->name}}</td>--}}
{{--                                                                <td>{{$room->id}}</td>--}}
{{--                                                                <td>{{$datetime}}</td>--}}
{{--                                                                <td>{{$date}}</td>--}}
{{--                                                                <td>{{"電源已打開"}}</td>--}}
{{--                                                                <td>{{"1"}}</td>--}}
{{--                                                                <td>{{"0"}}</td>--}}
{{--                                                            </tr>--}}
{{--                                                        @endif--}}
{{--                                                    @endforeach--}}
{{--                                                @endforeach--}}
{{--                                            @endforeach--}}
{{--                                        @endforeach--}}
{{--                                    @endforeach--}}
{{--                                @endif--}}
{{--                            @endforeach--}}
                            {{--新增預約使用者--}}
                            @foreach ($rooms as $room)      {{--教室--}}
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
{{--                    @foreach ($stas as $sta)--}}
{{--                        @if($datetime->between($sta->indaretime, $sta->outdatetime))--}}
{{--                            <tr>--}}
{{--                                <td>{{$user->id}}</td>--}}
{{--                                <td>{{$user->name}}</td>--}}
{{--                                <td>{{$room->name}}</td>--}}
{{--                                <td>{{$datetime}}</td>--}}
{{--                                <td>{{$book->outdatetime}}</td>--}}
{{--                                <td>{{"電源已打開"}}</td>--}}
{{--                                <td>{{"1"}}</td>--}}
{{--                                <td>{{"0"}}</td>--}}
{{--                            </tr>--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
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
