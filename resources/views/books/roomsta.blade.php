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
                <td><h1>教室使用狀態查詢</h1></td>
            </tr>
        </table>
        <form action="{{ route('room.sta.show') }}" method="POST" role="form">
            {{ csrf_field() }}
            <table style="width: 70%">
                <tr>
                    <td>教室名稱：
                        <select name="select">
                            <option value=" "> </option>
                            <option value="1">M501</option>
                            <option value="2">M502</option>
                            <option value="3">M503</option>
                            <option value="4">M511</option>
                            <option value="5">M513</option>
                            <option value="6">M514</option>
                            <option value="7">M510B</option>
                        </select>
                        <button>查詢</button>
                    </td>
                </tr>
            </table>
        </form>
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
            @endforeach
        </table>
    </center>
    </body>

@endsection
