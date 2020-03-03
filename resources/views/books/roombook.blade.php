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
            <form action="{{ route('book.show') }}" method="POST" role="form">
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
                    <td>預約日期時間</td>
                    <td>預計離開時間</td>
                    <td>借用人數</td>
                    <td>借用教室原因</td>
                </tr>
                @foreach($books as $book)
                    @foreach($items as $item)
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
                    @endforeach
                @endforeach
            </table>
        </center>
    </body>

@endsection
