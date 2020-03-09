@extends('admin.layouts.master')

@section('title', '進出教室名單')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            進出教室管理 <small>所有進出教室名單</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 進出教室管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
<div class="row" style="margin-bottom: 20px; text-align: right">
    <span style="font-size:large;">
    <body>
    <form action="{{ route('admin.status.indexshow') }}" method="POST" role="form">
            {{ csrf_field() }}
        <label>教室名稱：</label>
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
            <button type="submit" class="btn btn-success" style="background-color:#FFFFFF;color:#0000D1;border:3px black;font-size:large">
                送出
            </button>
    </form>
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
                        <th style="text-align: center">進入日期時間</th>
                        <th style="text-align: center">離開日期時間</th>
                        <th style="text-align: center">使用狀態</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($stas as $sta)
                            @foreach($users as $user)
                                @if($user->id==$sta->user_id)
                                    @foreach($rooms as $room)
                                        @if($sta->room_id==$room->id)
                                            <tr>
                                                <td>{{$sta->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$room->name}}</td>
                                                <td>{{$sta->indaretime}}</td>
                                                <td>{{$sta->outdatetime}}</td>
                                                <td>{{$sta->immediate}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<!-- /.row -->


<!-- /.row -->
@endsection