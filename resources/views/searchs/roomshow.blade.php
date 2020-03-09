@extends('layouts.master')

@section('title', '教室課表查詢')

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
                        <tr>
                            <td colspan="3"><img src="{{$room->timetable}}" width="100%"></td>
                        </tr>
                    @endif
                @endforeach
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
