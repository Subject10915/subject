@extends('layouts.master')

@section('title', '教室使用狀態')

@section('content')
    @php
        $url= 'https://api.thingspeak.com/channels/1080631/fields/1.json?timezone=Asia/Taipei&results=2';
        $contents =file_get_contents($url);

        $NewString=preg_split('/,/',$contents);
        if($NewString[13] == '"field1":"1"}]}')
            $sta='1';
        else
            $sta='0';
        $dt=date('Y-m-d H:i:s');
        $day=" ";
    @endphp
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
        <form action="{{ route('room.sta')}}" method="GET">
            <table style="width: 70%">
                <tr>
                    <td>
                        <button type="submit" class="btn btn-success" href="{{ route('room.sta')}}">偵測</button>
                    </td>
                </tr>
            </table>
        </form>
        <br>
        <table style="width: 70%;text-align: center" border="1" align="center" bgcolor="white">
            <tr bgcolor="#fafad2">
                <td style="text-align: center">進入日期時間</td>
                <td style="text-align: center">離開日期時間</td>
                <td style="text-align: center">使用狀態</td>
            </tr>
            <tr>
                @if($sta == '1')
                    <td>{{$dt}}</td>
                    <td>{{$day}}</td>
                    <td>教室有人使用</td>
                @elseif($sta == '0')
                    <td>{{$day}}</td>
                    <td>{{$dt}}</td>
                    <td>教室無人使用</td>
                @endif

            </tr>
        </table>
    </center>
    </body>

@endsection
