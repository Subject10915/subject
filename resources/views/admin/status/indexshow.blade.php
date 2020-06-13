@extends('admin.layouts.master')

@section('title', '進出教室名單')

@section('content')

<!-- Page Heading -->
<body style="background-color:white;">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            進出教室管理
            <small>
                該教室進出名單
            </small>
        </h1>
        <span style="font-size:large;">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> 進出教室管理
            </li>
        </ol>
        </span>
    </div>
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
                        @if($sta->room_id==$_POST["select"])
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
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->

<div class="text-right">
    <form action="{{ route('admin.status.index')}}" method="GET">
        <button type="submit" class="btn btn-success" style="background-color:#FFFFFF;color:#0000D1;border:3px black;font-size:large">返回</button>
    </form>
</div>


</body>

<!-- /.row -->
@endsection
