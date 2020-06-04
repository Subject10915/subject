@extends('admin.layouts.master')

@section('title', '後台管理')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            後台管理 <small></small>
        </h1>
        <span style="font-size:large;">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> 後台管理
            </li>
            <i class="fa fa-dashboard"></i> <a href="{{route('admin.status.index')}}">進出教室名單</a>
            <i class="fa fa-dashboard"></i> <a href="{{route('admin.status.search')}}">預約教室查詢</a>
            <i class="fa fa-dashboard"></i> <a href="{{route('admin.book.index')}}">預約教室</a>
            <i class="fa fa-dashboard"></i> <a href="{{route('admin.change.index')}}">調課管理</a>
        </ol>
        </span>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</div>
<!-- /.row -->

@endsection
