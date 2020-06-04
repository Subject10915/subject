@extends('admin.layouts.master')

@section('title', '編輯調課資訊')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            編輯調課 <small>修改編輯調課資訊</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 調課管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('admin.change.adminupdate', $changes->id) }}" method="POST" role="form">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <table>
                <tr>
                    <div class="form-group">
                        <label>審核管理：</label>
                        <select name="reason" class="form-control" value="{{$changes->status}}">
                            <option value="0">審核中</option>
                            <option value="1">通過</option>
                            <option value="2">未通過</option>
                        </select>
                    </div>
                </tr>
            </table>

            <div class="text-right">
                <button type="submit" class="btn btn-success" style="background-color:#FFFFFF;color:#0000D1;border:3px black;font-size:large">更新</button>
            </div>
        </form>
        <div class="text-right">
        <form action="{{ route('admin.change.index', $changes->id) }}" method="GET">
            <button type="submit" class="btn btn-success" style="background-color:#FFFFFF;color:#0000D1;border:3px black;font-size:large">返回</button>
        </form>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection
