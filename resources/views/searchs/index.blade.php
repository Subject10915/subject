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
            <form action="{{ route('room.timetable.show') }}" method="POST" role="form">
                {{ csrf_field() }}
                <table border="1" style="width: 70%">
                    <tr style="height: 40px" bgcolor="#fafad2">
                        <td><b>搜尋條件</b></td>
                    </tr>
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
            <br>
        </center>
    </body>

@endsection
