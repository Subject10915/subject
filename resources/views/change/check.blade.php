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
            <tr>
                <td>異動前日期</td>
                <td>異動前節次</td>
                <td>異動後日期</td>
                <td>異動後節次</td>
                <td>審核狀態</td>
            </tr>
            <tr>
                @foreach($changes as $change)
                <td>{{$change->before_day}}</td>
                <td>{{$change->before_session}}</td>
                <td>{{$change->after_day}}</td>
                <td>{{$change->after_session}}</td>
                <td>審核中</td>
                @endforeach
            </tr>
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
