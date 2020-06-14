@extends('admin.layouts.master')

@section('title', '偵測')

@section('content')
    @php
        $url= 'https://api.thingspeak.com/channels/1080631/fields/1.json?timezone=Asia/Taipei&results=2';
        $contents =file_get_contents($url);

        $NewString=preg_split('/,/',$contents);
        if($NewString[13] == '"field1":"1"}]}')
            $sta='1';
        else
            $sta='0';
    @endphp

    <!-- Page Heading -->
    <body style="background-color:white;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                偵測管理 <small>進出M510A教室名單 </small>
            </h1>
            <span style="font-size:large;">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> 偵測
            </li>
        </ol>
        </span>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th style="text-align: center">進入日期時間</th>
                        <th style="text-align: center">離開日期時間</th>
                        <th style="text-align: center">使用狀態</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td><?php echo date('Y-m-d H:i:s')?></td>
                        <td><?php echo date('Y-m-d H:i:s')?></td>
                        <td>{{$sta}}</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <div class="text-right">
        <form action="{{ route('admin.detect1') }}" method="GET">
            <button type="submit" class="btn btn-success" style="background-color:#FFFFFF;color:#0000D1;border:3px black;font-size:large">偵測</button>
        </form>
    </div>
    <div class="text-right">
        <form action="{{ route('admin.detestore') }}" method="GET">
            <button type="submit" class="btn btn-success" style="background-color:#FFFFFF;color:#0000D1;border:3px black;font-size:large">儲存偵測</button>
        </form>
    </div>
    </body>

@endsection
