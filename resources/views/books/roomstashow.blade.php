@extends('layouts.master')

@section('title', '教室使用狀態')

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
                <td><h1>教室預約查詢</h1></td>
            </tr>
        </table>
        <table style="width: 70%;text-align: center" border="1" align="center" bgcolor="white">
            <tr>
                <td>編號</td>
                <td>借用人姓名</td>
                <td>教室名稱</td>
                <td>進入日期時間</td>
                <td>離開日期時間</td>
                <td>使用狀態</td>
            </tr>
            @foreach($stas as $sta)
                @if($sta->room_id==$_POST["select"])
                    @foreach($users as $user)
                        @if($user->id==$sta->user_id)
                            @foreach($rooms as $room)
                                @if($sta->room_id==$room->id)
                                    <tr>
                                        <td>{{$sta->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$room->name}}</td>
                                        <td>{{$sta->indaretime}}</td>
                                        <td>{{$sta->outdatetime}}</td>
                                        <td>{{$sta->immediate}}</td>
                                    </tr>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                @endif
            @endforeach
        </table>
        <br>
        <table style="width: 70%">
            <tr align="right">
                <td><a href="{{ route('room.sta') }}"><label style="color: darkblue">返回查詢</label></a></td>
            </tr>
        </table>
    </center>
    </body>

@endsection
