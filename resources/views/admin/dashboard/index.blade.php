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
                    <a href="{{route('admin.status.index')}}" class="btn btn-success" style="text-align: center;background-color:#FFFFFF;color:#0000D1;font-size:large;border:3px black">
                        進出教室名單
                    </a>
                </tr>

                <tr>
                    <a href="{{route('admin.status.search')}}" class="btn btn-success" style="text-align: center;background-color:#FFFFFF;color:#0000D1;font-size:large;border:3px black">
                        預約教室查詢
                    </a>
                </tr>

                <tr>
                    <a href="{{route('admin.book.index')}}" class="btn btn-success" style="text-align: center;background-color:#FFFFFF;color:#0000D1;font-size:large;border:3px black">
                        預約教室
                    </a>
                </tr>

                <tr>
                    <a href="{{route('admin.change.index')}}" class="btn btn-success" style="text-align: center;background-color:#FFFFFF;color:#0000D1;font-size:large;border:3px black">
                        調課管理
                    </a>
                </tr>

                </thead>
            </table>
        </div>
    </div>
</div>

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
