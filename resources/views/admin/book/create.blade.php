@extends('admin.layouts.master')

@section('title', '新增預約名單')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            新增預約名單 <small>請輸入預約詳細資料</small>
        </h1>
        <span style="font-size:large;">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 預約管理
            </li>
        </ol>
        </span>
    </div>
</div>
<!-- /.row -->

@include('admin.layouts.partials.validation')

<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('admin.book.adminstore') }}" method="POST" role="form">
            {{ csrf_field() }}

            <table>
                <tr>
                    <div class="form-group">
                        <label>借用人姓名：</label>
                        <input name="user_id" class="form-control" value="巫秀文">
                    </div>
                </tr>

                <tr>
                    <div class="form-group">
                        <label>教室名稱：</label>
                        <select name="room_id" class="form-control">
                            <option value=" "> </option>
                            <option value="1">M501</option>
                            <option value="2">M502</option>
                            <option value="3">M503</option>
                            <option value="4">M511</option>
                            <option value="5">M513</option>
                            <option value="6">M514</option>
                            <option value="7">M510B</option>
                            <option value="8">M419</option>
                            <option value="9">國秀樓010教室</option>
                            <option value="10">文化休閒館CRB02</option>
                            <option value="11">國秀樓403教室</option>
                            <option value="12">國秀樓509教室</option>
                            <option value="13">M510A</option>
                        </select>
                    </div>
                </tr>

                <tr>
                    <div class="form-group">
                        <label>預約日期時間：</label>
                        <input type="datetime-local" name="indatetime" class="form-control">
                    </div>
                </tr>

                <tr>
                    <div class="form-group">
                        <label>預計離開時間：</label>
                        <input type="datetime-local" name="outdatetime" class="form-control">
                    </div>
                </tr>

                <tr>
                    <div class="form-group">
                        <label>借用人數：</label>
                        <input name="count" class="form-control" >
                    </div>
                </tr>

                <tr>
                    <div class="form-group">
                        <label>借用教室原因</label>
                        <select name="reason" class="form-control">
                            <option value="0">上課</option>
                            <option value="1">個人</option>
                        </select>
                    </div>
                </tr>
            </table>

            <div class="text-right">
                <button type="submit" class="btn btn-success" style="background-color:#FFFFFF;color:#0000D1;border:3px black;font-size:large">新增</button>
            </div>
        </form>
        <div class="text-right">
            <form action="{{ route('admin.book.index')}}" method="GET">
                <button type="submit" class="btn btn-success" style="background-color:#FFFFFF;color:#0000D1;border:3px black;font-size:large">返回</button>
            </form>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection
