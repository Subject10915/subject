@extends('layouts.master')

@section('title', '')

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
        </table>
        <form action="{{ route('book.transfer.store') }}" method="POST" role="form">
            {{ csrf_field() }}
            <table style="width: 70%">
                <tr>
                    <td><b><label>借用人姓名：</label>{{ Auth::user()->name }}</b></td>
                </tr>
                <tr>
                    <td>
                        <label><b>教室名稱：</b></label>
                        <select name="name">
                            <option value=" ">請選擇</option>
                            <option value="1">M501</option>
                            <option value="2">M502</option>
                            <option value="3">M503</option>
                            <option value="4">M511</option>
                            <option value="5">M513</option>
                            <option value="6">M514</option>
                            <option value="7">M510B</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label><b>預約日期時間：</b></label>
                        <input type="datetime-local" class="form-control checkin" name="indatetime" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label><b>預計離開時間：</b></label>
                        <input type="datetime-local" class="form-control checkout" name="outdatetime">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label><b>借用人數：</b></label>
                        <input name="count" class="form-control" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label><b>借用教室原因：</b></label>
                        <select name="reason">
                            <option value="0">上課</option>
                            <option value="1">個人</option>
                        </select>
                    </td>
                </tr>
            </table>
            <br>
            <table style="width: 70%">
                <tr align="right">
                    <td>
                        <button type="submit" class="btn btn-success">新增</button>
                    </td>
                </tr>
            </table>
        </form>
    </center>
    </body>

@endsection
