@extends('layouts.master')

@section('title', '功課表')

@section('content')

    <header class="masthead" style="background-color:#b0d4f1;">
        <table style="height: 80px">
            <tr>
                <td></td>
            </tr>
        </table>
    </header>


    <body style="background-color:#b0d4f1;">
    <center>
        <table style="width: 90%">
            <tr>
                <td><h1>功課表</h1></td>
            </tr>
        </table>
        <table border="1" style="table-layout: fixed" width="90%" bgcolor="white">
            <tr style="height: 80px" bgcolor="#fafad2" align="center">
                <td><b>節次</b></td>
                <td><b>一</b></td>
                <td><b>二</b></td>
                <td><b>三</b></td>
                <td><b>四</b></td>
                <td><b>五</b></td>
                <td><b>六</b></td>
                <td><b>日</b></td>
            </tr>
            <!--第一節-->
            <tr style="height: 90px" align="center">
                <td bgcolor="#fafad2"><label><b>1</b></label></td>
                <!--星期一-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==1 && $stutimetable->session==1)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期二-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==2 && $stutimetable->session==1)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期三-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==3 && $stutimetable->session==1)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期四-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==4 && $stutimetable->session==1)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期五-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==5 && $stutimetable->session==1)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期六-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==6 && $stutimetable->session==1)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期日-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==7 && $stutimetable->session==1)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
            </tr>
            <!--第二節-->
            <tr style="height: 90px" align="center">
                <td bgcolor="#fafad2"><label><b>2</b></label></td>
                <!--星期一-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==1 && $stutimetable->session==2)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期二-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==2 && $stutimetable->session==2)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期三-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==3 && $stutimetable->session==2)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期四-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==4 && $stutimetable->session==2)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期五-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==5 && $stutimetable->session==2)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期六-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==6 && $stutimetable->session==2)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期日-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==7 && $stutimetable->session==2)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
            </tr>
            <!--第三節-->
            <tr style="height: 90px" align="center">
                <td bgcolor="#fafad2"><label><b>3</b></label></td>
                <!--星期一-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==1 && $stutimetable->session==3)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期二-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==2 && $stutimetable->session==3)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期三-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==3 && $stutimetable->session==3)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期四-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==4 && $stutimetable->session==3)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期五-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==5 && $stutimetable->session==3)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期六-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==6 && $stutimetable->session==3)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期日-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==7 && $stutimetable->session==3)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
            </tr>
            <!--第四節-->
            <tr style="height: 90px" align="center">
                <td bgcolor="#fafad2"><label><b>4</b></label></td>
                <!--星期一-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==1 && $stutimetable->session==4)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期二-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==2 && $stutimetable->session==4)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期三-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==3 && $stutimetable->session==4)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期四-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==4 && $stutimetable->session==4)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期五-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==5 && $stutimetable->session==4)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期六-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==6 && $stutimetable->session==4)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期日-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==7 && $stutimetable->session==4)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
            </tr>
            <!--第五節-->
            <tr style="height: 90px" align="center">
                <td bgcolor="#fafad2"><label><b>5</b></label></td>
                <!--星期一-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==1 && $stutimetable->session==5)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期二-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==2 && $stutimetable->session==5)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期三-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==3 && $stutimetable->session==5)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期四-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==4 && $stutimetable->session==5)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期五-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==5 && $stutimetable->session==5)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期六-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==6 && $stutimetable->session==5)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期日-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==7 && $stutimetable->session==5)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
            </tr>
            <!--第六節-->
            <tr style="height: 90px" align="center">
                <td bgcolor="#fafad2"><label><b>6</b></label></td>
                <!--星期一-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==1 && $stutimetable->session==6)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期二-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==2 && $stutimetable->session==6)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期三-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==3 && $stutimetable->session==6)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期四-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==4 && $stutimetable->session==6)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期五-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==5 && $stutimetable->session==6)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期六-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==6 && $stutimetable->session==6)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期日-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==7 && $stutimetable->session==6)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
            </tr>
            <!--第七節-->
            <tr style="height: 90px" align="center">
                <td bgcolor="#fafad2"><label><b>7</b></label></td>
                <!--星期一-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==1 && $stutimetable->session==7)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期二-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==2 && $stutimetable->session==7)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期三-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==3 && $stutimetable->session==7)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期四-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==4 && $stutimetable->session==7)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期五-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==5 && $stutimetable->session==7)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期六-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==6 && $stutimetable->session==7)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期日-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==7 && $stutimetable->session==7)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
            </tr>
            <!--第八節-->
            <tr style="height: 90px" align="center">
                <td bgcolor="#fafad2"><label><b>8</b></label></td>
                <!--星期一-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==1 && $stutimetable->session==8)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期二-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==2 && $stutimetable->session==8)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期三-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==3 && $stutimetable->session==8)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期四-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==4 && $stutimetable->session==8)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期五-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==5 && $stutimetable->session==8)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期六-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==6 && $stutimetable->session==8)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
                <!--星期日-->
                <td>
                    @foreach($stutimetables as $stutimetable)
                        @if($stutimetable->day==7 && $stutimetable->session==8)
                            @foreach($studentitems as $studentitem)
                                @if($stutimetable->id==$studentitem->stu_timetable_id)
                                    @foreach($courses as $course)
                                        @if($studentitem->course_id==$course->id)
                                            @foreach($users as $user)
                                                @if($user->id==$stutimetable->user_id)
                                                    <label>{{$course->name}}</label>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </td>
            </tr>
        </table>
        <br>
    </center>
    </body>

@endsection
