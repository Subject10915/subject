@extends('admin.layouts.master')

@section('title', '編輯管理員')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            編輯管理員 <small>編輯管理員帳號密碼</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 管理員管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
@include('admin.layouts.partials.validation')

<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('admin.posts.update', $users->id) }}" method="POST" role="form">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="form-group">
                <label>姓名：</label>
                <input name="name" class="form-control" placeholder="請輸入姓名" value="{{$users->name}}">
            </div>

            <div class="form-group">
                <label>職稱：</label>
                <select name="type">
                    <option value=" "> </option>
                    　<option value="管理員">管理員</option>
                    　<option value="員工">員工</option>
                </select>
            </div>

            <div class="form-group">
                <label>帳號：</label>
                <textarea name="email" class="form-control" placeholder="請輸入帳號">{{$users->email}}</textarea>
            </div>

            <div class="form-group">
                <label>密碼：</label>
                <textarea name="password" class="form-control" placeholder="請輸入密碼">{{$users->password}}</textarea>

            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-success" style="background-color:#00B8B8;color:#FFFFFF;border:3px black">更新</button>
            </div>

        </form>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

    </div>
</div>
<!-- /.row -->
@endsection
