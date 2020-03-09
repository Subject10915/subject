@extends('layouts.master')

@section('title', '課表查詢')

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
                <td><h1>課表查詢</h1></td>
            </tr>
        </table>
            <table border="1" style="width: 70%">
                @foreach($students as $student)
                    @if($student->user_id==Auth::user()->id)
                        <tr>
                            <td colspan="3"><img src="{{$student->timetable}}" width="100%"></td>
                        </tr>
                    @endif
                @endforeach
            </table>
        <br>
    </center>
    </body>

@endsection
