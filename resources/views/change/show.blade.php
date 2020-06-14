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
                <td><h1>調課申請查詢</h1></td>
            </tr>
        </table>
        <table style="width: 70%;text-align: center" border="1" align="center" bgcolor="white">
            <tr bgcolor="#fafad2">
                <td>申請人姓名</td>
                <td>教室名稱</td>
                <td>課程名稱</td>
                <td>授課教師</td>
                <td>異動前日期</td>
                <td>異動前節次</td>
                <td>異動後日期</td>
                <td>異動後節次</td>
                <td>審核狀態</td>
            </tr>
            @foreach($changes as $change)
                @foreach($users as $user)
                    @if($user->id==$change->user_id)
                        @if($change->user_id== Auth::user()->id)
                            @foreach($rooms as $room)
                                @if($change->room_id==$room->id)
                                    @foreach($courses as $course)
                                        @if($change->after_day >= date("Y-m-d"))
                                            @if($change->course_id==$course->id)
                                            <tr>
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
                                            </tr>
                                            @endif
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endif
                @endforeach
            @endforeach
        </table>
        <br>
        <table style="width: 70%">
            <tr align="right">
                <td><a href="{{ route('change') }}"><label style="color: darkblue">返回</label></a></td>
            </tr>
        </table>
    </center>
    </body>

@endsection
