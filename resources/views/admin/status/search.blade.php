@extends('admin.layouts.master')

@section('title', '查詢')

@section('content')
<!-- Page Heading -->
<body style="background-color:white;">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            查詢
                <small>
                    所有預約教室查詢
                </small>
        </h1>
        <span style="font-size:large;">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> 查詢
            </li>
        </ol>
        </span>
    </div>
</div>
<!-- /.row -->

<div class="row" style="margin-bottom: 20px; text-align: right">
    <span style="font-size:large;">
    <body>
    <form action="{{ route('admin.status.searchshow') }}" method="POST" role="form">
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
                <option value="8">M419</option>
                <option value="9">國秀樓010教室</option>
                <option value="10">文化休閒館CRB02</option>
                <option value="11">國秀樓403教室</option>
                <option value="12">國秀樓509教室</option>
                <option value="13">M510A</option>
            </select>
            <button type="submit" class="btn btn-success" style="background-color:#FFFFFF;color:#0000D1;border:3px black;font-size:large">
                查詢
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
                        <th style="text-align: center">預約日期時間</th>
                        <th style="text-align: center">預計離開時間</th>
                        <th style="text-align: center">借用教室原因</th>
                    </tr>
                </thead>
            <tbody>
            @foreach($books as $book)
                @foreach($items as $item)
                    @if($book->id==$item->book_id)
                        @foreach($rooms as $room)
                            @if($item->room_id==$room->id)
                                @foreach($users as $user)
                                    @if($user->id==$book->user_id)
                                <tr>
                                    <td>{{$book->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$room->name}}</td>
                                    <td>{{$book->indatetime}}</td>
                                    <td>{{$book->outdatetime}}</td>
                                    @if($book->reason=="0")
                                        <td>上課</td>
                                    @elseif($book->reason=="1")
                                        <td>個人</td>
                                    @endif
                                </tr>
                                    @endif
                                @endforeach
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

<div class="text-right">
    <form action="{{ route('admin.dashboard.index')}}" method="GET">
        <button type="submit" class="btn btn-success" style="background-color:#FFFFFF;color:#0000D1;border:3px black;font-size:large">回首頁</button>
    </form>
</div>

<!-- /.row -->
</body>

<!-- /.row -->
@endsection
