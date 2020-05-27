@extends('layouts.master')

@section('title', '課表查詢')

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
        <table style="width: 70%">
            <tr>
                <td><h1>教室課表查詢</h1></td>
            </tr>
        </table>
        <table style="width: 70%;text-align: center" border="1" align="center">
            <tr bgcolor="#fafad2">
                <td>教室編號:</td>
                <td>教室名稱：</td>
                <td>用途:</td>

            </tr>
            @foreach($rooms as $room)
                @if($room->id==$_POST["select"])
                    <tr bgcolor="#fafad2">
                        <td>{{$room->id}}</td>
                        <td>{{$room->name}}</td>
                        <td>{{$room->about}}</td>
                    </tr>
                @endif
            @endforeach
        </table>

        <br>
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==1 && $classtimetable->session==1)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==2 && $classtimetable->session==1)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==3 && $classtimetable->session==1)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==4 && $classtimetable->session==1)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==5 && $classtimetable->session==1)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==6 && $classtimetable->session==1)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==7 && $classtimetable->session==1)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==1 && $classtimetable->session==2)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==2 && $classtimetable->session==2)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==3 && $classtimetable->session==2)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==4 && $classtimetable->session==2)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==5 && $classtimetable->session==2)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==6 && $classtimetable->session==2)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==7 && $classtimetable->session==2)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==1 && $classtimetable->session==3)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==2 && $classtimetable->session==3)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==3 && $classtimetable->session==3)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==4 && $classtimetable->session==3)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==5 && $classtimetable->session==3)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==6 && $classtimetable->session==3)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==7 && $classtimetable->session==3)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==1 && $classtimetable->session==4)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==2 && $classtimetable->session==4)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==3 && $classtimetable->session==4)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==4 && $classtimetable->session==4)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==5 && $classtimetable->session==4)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==6 && $classtimetable->session==4)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==7 && $classtimetable->session==4)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==1 && $classtimetable->session==5)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==2 && $classtimetable->session==5)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==3 && $classtimetable->session==5)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==4 && $classtimetable->session==5)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==5 && $classtimetable->session==5)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==6 && $classtimetable->session==5)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==7 && $classtimetable->session==5)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==1 && $classtimetable->session==6)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==2 && $classtimetable->session==6)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==3 && $classtimetable->session==6)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==4 && $classtimetable->session==6)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==5 && $classtimetable->session==6)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==6 && $classtimetable->session==6)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==7 && $classtimetable->session==6)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==1 && $classtimetable->session==7)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==2 && $classtimetable->session==7)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==3 && $classtimetable->session==7)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==4 && $classtimetable->session==7)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==5 && $classtimetable->session==7)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==6 && $classtimetable->session==7)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==7 && $classtimetable->session==7)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==1 && $classtimetable->session==8)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==2 && $classtimetable->session==8)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==3 && $classtimetable->session==8)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==4 && $classtimetable->session==8)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==5 && $classtimetable->session==8)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==6 && $classtimetable->session==8)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==7 && $classtimetable->session==8)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
            <!--第九節-->
            <tr style="height: 90px" align="center">
                <td bgcolor="#fafad2"><label><b>9</b></label></td>
                <!--星期一-->
                <td>
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==1 && $classtimetable->session==9)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==2 && $classtimetable->session==9)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==3 && $classtimetable->session==9)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==4 && $classtimetable->session==9)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==5 && $classtimetable->session==9)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==6 && $classtimetable->session==9)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==7 && $classtimetable->session==9)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
            <!--第十節-->
            <tr style="height: 90px" align="center">
                <td bgcolor="#fafad2"><label><b>10</b></label></td>
                <!--星期一-->
                <td>
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==1 && $classtimetable->session==10)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==2 && $classtimetable->session==10)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==3 && $classtimetable->session==10)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==4 && $classtimetable->session==10)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==5 && $classtimetable->session==10)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==6 && $classtimetable->session==10)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==7 && $classtimetable->session==10)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
            <!--第十一節-->
            <tr style="height: 90px" align="center">
                <td bgcolor="#fafad2"><label><b>11</b></label></td>
                <!--星期一-->
                <td>
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==1 && $classtimetable->session==11)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==2 && $classtimetable->session==11)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==3 && $classtimetable->session==11)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==4 && $classtimetable->session==11)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==5 && $classtimetable->session==11)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==6 && $classtimetable->session==11)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==7 && $classtimetable->session==11)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
            <!--第十二節-->
            <tr style="height: 90px" align="center">
                <td bgcolor="#fafad2"><label><b>12</b></label></td>
                <!--星期一-->
                <td>
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==1 && $classtimetable->session==12)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==2 && $classtimetable->session==12)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==3 && $classtimetable->session==12)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==4 && $classtimetable->session==12)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==5 && $classtimetable->session==12)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==6 && $classtimetable->session==12)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==7 && $classtimetable->session==12)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
            <!--第十三節-->
            <tr style="height: 90px" align="center">
                <td bgcolor="#fafad2"><label><b>13</b></label></td>
                <!--星期一-->
                <td>
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==1 && $classtimetable->session==13)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==2 && $classtimetable->session==13)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==3 && $classtimetable->session==13)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==4 && $classtimetable->session==13)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==5 && $classtimetable->session==13)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==6 && $classtimetable->session==13)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==7 && $classtimetable->session==13)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
            <!--第十四節-->
            <tr style="height: 90px" align="center">
                <td bgcolor="#fafad2"><label><b>14</b></label></td>
                <!--星期一-->
                <td>
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==1 && $classtimetable->session==14)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==2 && $classtimetable->session==14)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==3 && $classtimetable->session==14)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==4 && $classtimetable->session==14)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==5 && $classtimetable->session==14)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==6 && $classtimetable->session==14)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==7 && $classtimetable->session==14)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
            <!--第十五節-->
            <tr style="height: 90px" align="center">
                <td bgcolor="#fafad2"><label><b>15</b></label></td>
                <!--星期一-->
                <td>
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==1 && $classtimetable->session==15)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==2 && $classtimetable->session==15)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==3 && $classtimetable->session==15)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==4 && $classtimetable->session==15)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==5 && $classtimetable->session==15)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==6 && $classtimetable->session==15)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==7 && $classtimetable->session==15)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
            <!--第十六節-->
            <tr style="height: 90px" align="center">
                <td bgcolor="#fafad2"><label><b>16</b></label></td>
                <!--星期一-->
                <td>
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==1 && $classtimetable->session==16)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==2 && $classtimetable->session==16)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==3 && $classtimetable->session==16)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==4 && $classtimetable->session==16)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==5 && $classtimetable->session==16)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==6 && $classtimetable->session==16)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==7 && $classtimetable->session==16)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
            <!--第十七節-->
            <tr style="height: 90px" align="center">
                <td bgcolor="#fafad2"><label><b>17</b></label></td>
                <!--星期一-->
                <td>
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==1 && $classtimetable->session==17)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==2 && $classtimetable->session==17)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==3 && $classtimetable->session==17)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==4 && $classtimetable->session==17)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==5 && $classtimetable->session==17)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==6 && $classtimetable->session==17)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
                    @foreach($classtimetables as $classtimetable)
                        @if($classtimetable->day==7 && $classtimetable->session==17)
                            @foreach($classitems as $classitem)
                                @if($classtimetable->id==$classitem->class_timetable_id)
                                    @foreach($courses as $course)
                                        @if($classitem->course_id==$course->id)
                                            @foreach($rooms as $room)
                                                @if($room->id==$classtimetable->room_id)
                                                    @if($classtimetable->room_id == $_POST["select"])
                                                        <label>{{$course->name}}</label>
                                                    @endif
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
        <table style="width: 70%">
            <tr align="right">
                <td><a href="{{ route('room') }}"><label style="color: darkblue">返回查詢</label></a></td>
            </tr>
        </table>
    </center>
    </body>
@endsection
