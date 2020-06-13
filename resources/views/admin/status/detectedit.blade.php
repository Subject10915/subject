<?php
//連接Arduino
//function openSerial($command)
//{
//    $openSerial = false;
//    try
//    {
//        exec("mode com4: BAUD=9600 PARITY=n DATA=8 STOP=1 to=off dtr=off rts=off");
//        $fopen =fopen("com7", "w");    //fopen 函數可以用來開啟文件或 URL 內容  //"w" 以寫入模式開啟  //"w+" 以讀寫模式開啟
//        $openSerial = true;
//    }
//    catch(Exception $e)     // 捕獲異常
//    {
//        echo 'Message: ' .$e->getMessage();
//    }
//
//    if($openSerial)
//    {
//        fwrite($fopen, $command); //fwrite() 函數寫入文件 -> fwrite(file,string,length) //file 必需。規定要寫入的打開文件 //string 必需。規定要寫入文件的字符串 //length 可選。規定要寫入的最大字節數
//        fclose($fopen);           //fclose() 函數關閉一個打開文件 -> fclose(file) //file 必需。規定要關閉的文件
//    }
//}
//openSerial("Without this line, the first control will not work. I don't know way.");
//
//    function buzeer_function($b)
//    {
//        if($b=="L")
//        {
//            openSerial("L");
//            return ($b);
//        }
//    }
?>

@extends('admin.layouts.master')

@section('title', '更改警報器狀態')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                警報器狀態已關閉
            </h1>
            <div class="text-right">
                <a href="{{ route('admin.status.detectupdate',$sta->id) }}" >
                    {{--<!-- <?php //$b=buzzer_function("L"); ?>-->--}}
                    <form action="{{ route('admin.status.detectupdate',$sta->id) }}" method="GET">
                        <button type="submit" class="btn btn-success" style="background-color:#FFFFFF;color:#0000D1;border:3px black;font-size:large">確定</button>
                    </form>
                </a>
            </div>
        </div>
    </div>

@endsection
