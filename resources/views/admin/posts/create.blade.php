@extends('admin.layouts.master')

@section('title', '新增管理員')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            新增管理員 <small>請輸入帳號密碼</small>
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
        <form action="{{ route('admin.posts.store') }}" method="POST" role="form">
            {{ csrf_field() }}
            <div class="form-group">
                <label>姓名：</label>
                <input name="name" class="form-control" placeholder="請輸入姓名">
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
                <label>手機號碼：</label>
                <input name="phone" class="form-control" placeholder="0912345678">
            </div>

            <div class="form-group">
                <label>帳號：</label>
                <input name="email" class="form-control" placeholder="請輸入帳號"></input>
            </div>

            <div class="form-group">
                <label>密碼</label>
                <input name="password" class="form-control" placeholder="請輸入密碼"></input>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-success" style="background-color:#00B8B8;color:#FFFFFF;border:3px black">新增</button>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

        </form>
    </div>
</div>
<!-- /.row -->
@endsection
