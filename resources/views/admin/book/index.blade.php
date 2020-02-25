@extends('admin.layouts.master')

@section('title', '預約教室')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            預約教室 <small>預約教室名單</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 教室管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row" style="margin-bottom: 20px; text-align: right">
    <div class="col-lg-12">
        <span style="font-size:large;">
        <a href="{{ route('admin.book.create') }}" class="btn btn-success" style="background-color:#FFFFFF;color:#0000D1;font-size:large;border:3px black">
            新增預約教室名單
        </a>
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
                        <th style="text-align: center">預約日期時間</th>
                        <th style="text-align: center">預計離開時間</th>
                        <th style="text-align: center">借用人數</th>
                        <th style="text-align: center">借用教室原因</th>
                        <th style="text-align: center">管理</th>
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
                                                <td>{{$book->count}}</td>
                                                <td>{{$book->reason}}</td>
                                                <td>
                                                    <a href="{{route('admin.book.edit',$book->id)}}">
                                                        <button type="submit" class="btn btn-success"  style="background-color:#FFFFFF;color:#0000D1;border:3px black">
                                                            編輯
                                                        </button>
                                                    </a>
                                                    /
                                                    <a href="/admin/reservation/{{ $book->id }}">
                                                        <button type="submit" class="btn btn-success"  style="background-color:#FFFFFF;color:#FF0000;border:3px black">
                                                            刪除
                                                        </button>
                                                    </a>
                                                </td>
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
@endsection
