@extends('admin.layouts.master')

@section('title', '編輯預約')

@section('content')
<!-- Page Heading -->
<body style="background-color:white;">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            編輯預約 <small>修改編輯預約教室</small>
        </h1>
        <span style="font-size:large;">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 教室管理
            </li>
        </ol>
        </span>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('admin.book.adminupdate', $books->id) }}" method="POST" role="form">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <table>
                <tr>
                    <div class="form-group">
                        <label>預約日期時間：</label>
                        <input type="text" name="indatetime" class="form-control" value="{{$books->indatetime}}">
                    </div>
                </tr>

                <tr>
                    <div class="form-group">
                        <label>預計離開時間：</label>
                        <input type="text" name="outdatetime" class="form-control" value="{{$books->outdatetime}}">
                    </div>
                </tr>

                <tr>
                    <div class="form-group">
                        <label>借用人數：</label>
                        <input type="text" name="count" class="form-control" value="{{$books->count}}">
                    </div>
                </tr>

                <tr>
                    <div class="form-group">
                        <label>借用教室原因：</label>
                        <select name="reason" class="form-control" value="{{$books->reason}}">
                            <option value="0">上課</option>
                            <option value="1">個人</option>
                        </select>

                    </div>
                </tr>
            </table>

            <div class="text-right">
                <button type="submit" class="btn btn-success" style="background-color:#FFFFFF;color:#0000D1;border:3px black;font-size:large">更新</button>
            </div>
        </form>
        <div class="text-right">
        <form action="{{ route('admin.book.index', $books->id) }}" method="GET">
            <button type="submit" class="btn btn-success" style="background-color:#FFFFFF;color:#0000D1;border:3px black;font-size:large">返回</button>
        </form>
        </div>
    </div>
</div>
</body>
<!-- /.row -->
@endsection
