@extends('layouts.master')

@section('title', '調課')

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
                <td><h1>調課申請已送出！</h1></td>
            </tr>
        </table>
    </center>
    <br>
    <table style="width: 70%">
        <tr align="right">
            <td><a href="{{ route('change.show') }}"><label style="color: darkblue">查看調課申請</label></a></td>
        </tr>
    </table>
    </body>

@endsection
