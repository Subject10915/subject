@extends('layouts.master')

@section('title', '教室預約查詢')

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
                <td>預約日期時間</td>
                <td>預計離開時間</td>
                <td>借用人數</td>
                <td>借用教室原因</td>
            </tr>
            @foreach($books as $book)
                @foreach($items as $item)
                    @if($item->room_id==$_POST["select"])
                        @if($book->id==$item->book_id)
                            @foreach($rooms as $room)
                                @if($item->room_id==$room->id)
                                    @foreach($users as $user)
                                        @if($user->id==$book->user_id)
                                            <tr>
                                                <td>{{$book->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$room->name}}</td>
                                                <td>{{$book->indatetime}}</td>
                                                <td>{{$book->outdatetime}}</td>
                                                <td>{{$book->count}}</td>
                                                @if($book->reason=='0')
                                                    <td>上課</td>
                                                @else
                                                    <td>個人</td>
                                                @endif
                                            </tr>
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
                <td><a href="{{ route('book.search') }}"><label style="color: darkblue">返回查詢</label></a></td>
            </tr>
        </table>
    </center>
    </body>

@endsection
