@extends('admin.layouts.master')

@section('title', '查詢')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            查詢 <small>預約教室查詢</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 查詢
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row" style="margin-bottom: 20px; text-align: right">
    <span style="font-size:large;">
    <body>
        <label>教室名稱：</label>
            <select name="name">
                <option value=" "> </option>
                <option value="1">M501</option>
                <option value="2">M502</option>
                <option value="3">M503</option>
                <option value="4">M511</option>
                <option value="5">M513</option>
                <option value="6">M514</option>
                <option value="7">M510B</option>
            </select>
                <a href="javascript:;" onclick="document.getElementById('d1').style.display=''">
                    查詢
                </a>
    </body>
    </span>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="70" style="text-align: center">編號</th>
                        <th style="text-align: center">借用人姓名</th>
                        <th style="text-align: center">教室名稱</th>
                        <th style="text-align: center">預約日期時間</th>
                        <th style="text-align: center">預計離開時間</th>
                        <th style="text-align: center">借用教室原因</th>
                    </tr>
                </thead>
            <tbody>
            @foreach($items as $item)
            @foreach($books as $book)
            @foreach($users as $user)
                @if($user->id==$book->user_id)
            @foreach($rooms as $room)
                @if($item->room_id==$room->id)
                    <tr>
                        <td>{{$book->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$room->name}}</td>
                        <td>{{$book->indatetime}}</td>
                        <td>{{$book->outdatetime}}</td>
                        <td>{{$book->reason}}</td>
                    </tr>
                @endif
            @endforeach
                @endif
            @endforeach
            @endforeach
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.row -->

<div id="d1" style="display: none">
    ABC
</div>


<!-- /.row -->


<!-- /.row -->
@endsection
