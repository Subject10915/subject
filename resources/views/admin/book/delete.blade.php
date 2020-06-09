@extends('admin.layouts.master')

@section('title', '確認刪除')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            確認刪除 <small>您是否確定刪除該筆資料</small>
        </h1>
        <span style="font-size:large;">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 確認刪除
            </li>
        </ol>
        </span>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
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
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                @if($item->book_id==$books->id)
            @foreach($users as $user)
                @if($user->id==$books->user_id)
            @foreach($rooms as $room)
                @if($item->room_id==$room->id)
            <tr>
                <td>{{$books->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$room->name}}</td>
                <td>{{$books->indatetime}}</td>
                <td>{{$books->outdatetime}}</td>
                <td>{{$books->count}}</td>
                <td>{{$books->reason}}</td>
            </tr>
                @endif
            @endforeach
                @endif
            @endforeach
                @endif
            @endforeach
            </tbody>
        </table>
        <div class="text-right">
            <form action="/admin/reservation/{{$books->id}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-success" style="background-color:#FFFFFF;color:#FF0000;border:3px black;font-size:large">刪除</button>
            </form>
        </div>
        <div class="text-right">
            <BR>
        </div>
        <div class="text-right">
            <form action="{{ route('admin.book.index', $books->id) }}" method="GET">
                <button type="submit" class="btn btn-success" style="background-color:#FFFFFF;color:#0000D1;border:3px black;font-size:large">返回</button>
            </form>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection
