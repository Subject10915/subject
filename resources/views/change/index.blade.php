@extends('layouts.master')

@section('title', '調課申請')

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
                <td><h1>調課</h1></td>
            </tr>
            <tr>
                <td><h4>請點選欲調課之課程</h4></td>
            </tr>
        </table>
        <table border="1" width="70%" bgcolor="white">
            <tr align="center" bgcolor="#fafad2">
                <td>星期</td>
                <td>節次</td>
                <td>科目</td>
            </tr>
            @foreach($stutimetables as $stutimetable)
                @foreach($studentitems as $studentitem)
                    @if($stutimetable->id==$studentitem->stu_timetable_id)
                        @foreach($courses as $course)
                            @if($studentitem->course_id==$course->id)
                                @foreach($users as $user)
                                    @if($user->id==$stutimetable->user_id)
                                        @if($stutimetable->user_id == Auth::user()->id)
                                            <tr align="center">
                                                @if($stutimetable->day == 1)
                                                    <td><label>一</label></td>
                                                @elseif($stutimetable->day == 2)
                                                    <td><label>二</label></td>
                                                @elseif($stutimetable->day == 3)
                                                    <td><label>三</label></td>
                                                @elseif($stutimetable->day == 4)
                                                    <td><label>四</label></td>
                                                @elseif($stutimetable->day == 5)
                                                    <td><label>五</label></td>
                                                @elseif($stutimetable->day == 6)
                                                    <td><label>六</label></td>
                                                @elseif($stutimetable->day == 7)
                                                    <td><label>七</label></td>
                                                @endif
                                                <td><label>{{$stutimetable->session}}</label></td>
                                                <td><label><a href="/change/{{$stutimetable->id}}/{{$course->id}}">{{$course->name}}</a></label></td>
                                            </tr>
                                        @endif
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    @endif
                @endforeach
            @endforeach
        </table>
    </center>
    </body>

@endsection
