@extends('admin.layouts.master')

@section('title', '新增調課資訊')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            新增調課資訊 <small>請輸入調課詳細資料</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 調課管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

@include('admin.layouts.partials.validation')

<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('admin.change.adminstore') }}" method="POST" role="form">
            {{ csrf_field() }}

            <table>
                <tr>
                    <div class="form-group">
                        <label>申請人姓名：</label>
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
                        </select>
                    </div>
                </tr>

                <tr>
                    <div class="form-group">
                        <label>課程名稱：</label>
                        <select name="course" class="form-control">
                            <option value=" "> </option>
                            <option value="1">物聯網實務與應用(四技日間部)</option>
                            <option value="2">網路行銷(四技日間部)</option>
                            <option value="3">雲端運算(四技日間部)</option>
                            <option value="4">數位遊戲設計(四技日間部)</option>
                            <option value="5">生產管理資訊系統(四技日間部)</option>
                            <option value="6">深度學習(四技日間部)</option>
                            <option value="7">財務會計資訊系統(四技日間部)</option>
                            <option value="8">服務創新與管理(四技日間部)</option>
                            <option value="9">資料分析(四技日間部)</option>
                            <option value="10">專業證照檢定輔導(四技日間部)</option>
                            <option value="11">科技創新與管理(四技日間部)</option>
                            <option value="12">實務專題（二）(四技日間部)</option>
                            <option value="13">通識社會科學領域（正向思考與幸福人生）(四技日間部)</option>
                            <option value="14">通識人文藝術領域（性別議題與電影）(四技日間部)</option>
                            <option value="15">基礎德語（一）(四技日間部)</option>
                            <option value="16">通識人文藝術領域（客家社會與文化）(四技日間部)</option>
                            <option value="17">資訊安全(四技日間部)</option>
                            <option value="18">行動裝置應用程式設計(四技日間部)</option>
                            <option value="19">人工智慧(四技日間部)</option>
                            <option value="20">人工智慧(四技進修推廣部)</option>
                            <option value="21">資訊安全(四技進修推廣部)</option>
                            <option value="22">資料庫入門(四技日間部)</option>
                            <option value="23">資料庫入門(四技日間部)</option>
                            <option value="24">多媒體設計(四技日間部)</option>
                            <option value="25">商用程式設計(四技日間部)</option>
                            <option value="26">結構化方程式(碩士班)</option>
                            <option value="27">企業資源規劃導論(四技日間部)</option>
                            <option value="28">商用程式設計(四技日間部)</option>
                            <option value="29">作業研究(四技日間部)</option>
                            <option value="30">計算機概論(四技日間部)</option>
                            <option value="31">資訊管理導論(四技日間部)</option>
                            <option value="32">科技創新與管理(四技日間部)</option>
                        </select>
                    </div>
                </tr>

                <tr>
                    <div class="form-group">
                        <label>異動前日期：</label>
                        <input type="date" name="before" class="form-control"
                               min="<?php echo date ("Y-m-d"); ?>"
                               max="<?php echo date ("Y-m-d",strtotime("+14days")); ?>"
                        >
                    </div>
                </tr>

                <tr>
                    <div class="form-group">
                        <label>異動前節次：</label>
                        <input name="beforesession" class="form-control" >
                    </div>
                </tr>

                <tr>
                    <div class="form-group">
                        <label>異動後日期：</label>
                        <input type="date" name="afterdate" class="form-control"
                               min="<?php echo date ("Y-m-d"); ?>"
                               max="<?php echo date ("Y-m-d",strtotime("+14days")); ?>">
                    </div>
                </tr>

                <tr>
                    <div class="form-group">
                        <label>異動後節次：</label>
                        <input name="aftersession" class="form-control" >
                    </div>
                </tr>

                <tr>
                    <div class="form-group">
                        <label>審核狀態：</label>
                        <select name="status" class="form-control" >
                            <option value=" "> </option>
                            <option value="1">通過</option>
                        </select>
                    </div>
                </tr>
            </table>

            <div class="text-right">
                <button type="submit" class="btn btn-success" style="background-color:#FFFFFF;color:#0000D1;border:3px black;font-size:large">新增</button>
            </div>
        </form>
        <div class="text-right">
            <form action="{{ route('admin.change.index')}}" method="GET">
                <button type="submit" class="btn btn-success" style="background-color:#FFFFFF;color:#0000D1;border:3px black;font-size:large">返回</button>
            </form>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection
