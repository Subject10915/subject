@extends('admin.layouts.master')

@section('title', '管理員')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            管理員管理 <small>所有使用者名單</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 管理員管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row" style="margin-bottom: 20px; text-align: right">
    <div class="col-lg-12">
        <a href="{{ route('admin.posts.create') }}" class="btn btn-success" style="background-color:#00B8B8;color:#FFFFFF;border:3px black">建立新管理員</a>
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
                        <th width="70" style="text-align: center">姓名</th>
                        <th width="70" style="text-align: center">類別</th>
                        <th style="text-align: center">手機號碼</th>
                        <th style="text-align: center">帳號</th>
                        <th style="text-align: center">密碼</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->name}}</td>
                        <td>{{$post->type}}</td>
                        <td>{{$post->phone}}</td>
                        <td>{{$post->email}}</td>
                        <td>{{$post->password}}</td>
                        <td>
                            <a href="{{route('admin.posts.edit',$post->id)}}">
                                <button type="submit" class="btn btn-success"  style="background-color:#FFFFFF;color:#1212FF;border:3px black">編輯</button>
                            </a>
                            /
                            <a href="users/{{ $post->id }}">
                                <button type="submit" class="btn btn-success"  style="background-color:#FFFFFF;color:#FF0000;border:3px black">刪除</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection
