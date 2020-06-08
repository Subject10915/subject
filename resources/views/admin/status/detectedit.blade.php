<?php
//連接Arduino
//function openSerial($command)
//{
//    $openSerial = false;
//    try
//    {
//        exec("mode com3: BAUD=9600 PARITY=n DATA=8 STOP=1 to=off dtr=off rts=off");
//        $fopen =fopen("com3", "w");    //fopen 函數可以用來開啟文件或 URL 內容  //"w" 以寫入模式開啟  //"w+" 以讀寫模式開啟
//        //$fp = fopen('/dev/ttyUSB0','r+'); //use this for Linux
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
//openSerial("Without this line, the first control will not work. I don't know way.");    //沒有此行，第一個控件將無法工作。我不知道
//
////判斷是否有變數(submit1)存在
//if(isset($_POST['submit1']))
//{
//    openSerial("H");    //開
//}
////判斷是否有變數(submit2)存在
//if(isset($_POST['submit2']))
//{
//    openSerial("L");    //關
//}
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

{{--                        <button class="btn btn-primary text-white" style="font-size: medium " name="submit2" >確定</button>--}}
                    <button class="btn btn-primary text-white" style="font-size: medium ">確定</button>
                    {{--                    </form>--}}
                </a>
            </div>
        </div>
    </div>

@endsection
