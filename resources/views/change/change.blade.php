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
    @php
        $total ='  ';
    @endphp
    <body style="background-color:#b0d4f1;">
    <center>
        <table style="width: 70%">
            <tr>
                <td><h1>調課</h1></td>
            </tr>
        </table>
        <br>
        <form action="{{ route('change.store') }}" method="POST" role="form">
            @csrf
            <table style="width: 70%">
                <tr>
                    <td><b><label>申請人姓名：</label>{{ Auth::user()->name }}</b></td>
                </tr>
                <tr>
                    <td>
                        <b><label>課程代碼：</label></b>
                        <input class="form-control" name="course" type="text" readonly="readonly" value="{{$courses->id}}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <b><label>課程名稱：</label></b>
                        <input class="form-control" type="text" readonly="readonly" value="{{$courses->name}}">
                    </td>
                </tr>
                <tr>
                    <td><b><label>授課教師：</label>{{$courses->teacher}}</b></td>
                </tr>
                <tr><td><p></p></td></tr>
                <tr>
                    <td>
                        <label><b>異動前：</b></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            <b>教室：
                                @foreach($rooms as $room)
                                    @if($room->id==$courses->room_id)
                                        <label>{{$room->name}}</label>
                                    @endif
                                @endforeach
                            </b>
                        </label>
                        <label name="beforesession"><b>　　星期：</b></label>
                        @foreach($stutimetables as $stutimetable)
                            @if($stutimetable->id==$timeid)
                                @if($stutimetable->day == 1)
                                    <input name="beforeday" id="beforeday" type="number" readonly="readonly" value="1" style="width:50px; padding:10px">
                                @elseif($stutimetable->day == 2)
                                    <input name="beforeday" id="beforeday" type="number" readonly="readonly" value="2" style="width:50px; padding:10px">
                                @elseif($stutimetable->day == 3)
                                    <input name="beforeday" id="beforeday" type="number" readonly="readonly" value="3" style="width:50px; padding:10px">
                                @elseif($stutimetable->day == 4)
                                    <input name="beforeday" id="beforeday" type="number" readonly="readonly" value="4" style="width:50px; padding:10px">
                                @elseif($stutimetable->day == 5)
                                    <input name="beforeday" id="beforeday" type="number" readonly="readonly" value="5" style="width:50px; padding:10px">
                                @elseif($stutimetable->day == 6)
                                    <input name="beforeday" id="beforeday" type="number" readonly="readonly" value="6" style="width:50px; padding:10px">
                                @elseif($stutimetable->day == 7)
                                    <input name="beforeday" id="beforeday" type="number" readonly="readonly" value="7" style="width:50px; padding:10px">
                                @endif
                            @endif
                        @endforeach
                        <label name="beforesession"><b>　　節次：</b></label>
                        @foreach($stutimetables as $stutimetable)
                            @if($stutimetable->id==$timeid)
                                <input name="beforesession" type="text" readonly="readonly" value="{{$stutimetable->session}}" style="width:50px; padding:10px">
                            @endif
                        @endforeach

                        <label><b>日期：</b></label>
                        <input type="date" name="before" id="before" onchange="Before(this.id)"
                               min="<?php echo date ("Y-m-d"); ?>"
                               max="<?php echo date ("Y-m-d",strtotime("+1months")); ?>">
                    </td>
                </tr>
                <tr><td><p></p></td></tr>
                <tr>
                    <td>
                        <label><b>異動後：</b></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label><b>教室：</b></label>
                        <select name="room">
                            <option value=" ">請選擇</option>
                            <option value="1">M501</option>
                            <option value="2">M502</option>
                            <option value="3">M503</option>
                            <option value="4">M511</option>
                            <option value="5">M513</option>
                            <option value="6">M514</option>
                            <option value="7">M510B</option>
                        </select>
                        <label name="afterday"><b>　　星期：</b></label>
                        <span name="afterweek" id="total">{{ $total }}</span>
                        <label><b>　　節次：</b></label>
                        <select name="aftersession">
                            <option value=" ">請選擇</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <label><b>　　日期：</b></label>
                        <input type="date" name="afterdate" id="afterdate" onchange="After(this.id)"
                               min="<?php echo date ("Y-m-d"); ?>"
                               max="<?php echo date ("Y-m-d",strtotime("+1months")); ?>">
                    </td>
                </tr>
            </table>
            <br>
            <table style="width: 70%">
                <tr align="right">
                    <td>
                        <button type="submit" class="btn btn-success" href="/change/store">新增</button>
                    </td>
                </tr>
            </table>
        </form>
    </center>
    <script>
        function Before(x){
            var before=document.getElementById(x).value;
            var after=document.getElementById("afterdate").value;
            var beforeday=parseInt($("#beforeday").val());
            var day=Date.parse(after)-Date.parse(before);
            var week = parseInt((day/(1000*60*60*24))%7);
            week += beforeday;
            week =parseInt(week % 7);
            if(before>=after){
                $("#total").text('日期錯誤');
            }
            else{
                $("#total").text(week);
            }
        }
        function After(y){
            var before=document.getElementById("before").value;;
            var after=document.getElementById(y).value;
            var beforeday=parseInt($("#beforeday").val());
            var day=Date.parse(after)-Date.parse(before);
            var week = parseInt((day/(1000*60*60*24))%7);
            week += beforeday;
            week =parseInt(week % 7);
            if(before>=after){
                $("#total").text('日期錯誤');
            }
            else{
                if(week==0){
                    $("#total").text('7');
                }
                else{
                    $("#total").text(week);
                }
            }
        }
    </script>
    </body>
@endsection

@section('scriptsAfterJs')

@endsection
