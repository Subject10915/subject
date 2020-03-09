@extends('admin.layouts.master')

@section('title', '查詢')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            查詢
                <small>
                    該教室預約查詢
                </small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 查詢
            </li>
        </ol>
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
                        <th style="text-align: center">預約日期時間</th>
                        <th style="text-align: center">預計離開時間</th>
                        <th style="text-align: center">借用教室原因</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($books as $book)
                        @foreach($items as $item)
                            @if($item->room_id==$_POST["select"])
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
                                                        <td>{{$book->reason}}</td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
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
    <form action="{{ route('admin.status.search')}}" method="GET">
        <button type="submit" class="btn btn-success" style="background-color:#FFFFFF;color:#0000D1;border:3px black;font-size:large">返回</button>
    </form>
</div>



<!-- /.row -->


<!-- /.row -->
@endsection