@extends('layouts.master')

@section('title', '節次時段對照')

@section('content')

    <header class="masthead" style="background-color:#b0d4f1;">
        <table style="height: 80px">
            <tr>
                <td></td>
            </tr>
        </table>
    </header>

    <body style="background-color:#b0d4f1;">
        <center>
            <table border="1" style="width: 80%">
                <tr style="height: 80px" bgcolor="#fafad2" align="center">
                    <td colspan="4"><font size="20px"><b>節次時段對照</b></font></td>
                </tr>
                <tr style="height: 60px" bgcolor="#fafad2" align="center">
                    <td width="5%"></td>
                    <td width="31%"><b>日間部 <font color="red">上課時段</font></b></td>
                    <td width="31%"><b>進修推廣部 <font color="red">上課時段</font></b></td>
                    <td><b>進修學院暨專科進修學校(含流管科產學班)、進修推廣部(星期六日) <font color="red">上課時段</font></b></td>
                </tr>
                <tr style="height: 60px" align="center">
                    <td bgcolor="#fafad2"><b>1</b></td>
                    <td bgcolor="white"><b>08:10~09:00</b></td>
                    <td bgcolor="white"></td>
                    <td bgcolor="white"><b>08:30~09:15</b></td>
                </tr>
                <tr style="height: 60px" align="center">
                    <td bgcolor="#fafad2"><b>2</b></td>
                    <td bgcolor="white"><b>09:10~10:00</b></td>
                    <td bgcolor="white"></td>
                    <td bgcolor="white"><b>09:20~10:05</b></td>
                </tr>
                <tr style="height: 60px" align="center">
                    <td bgcolor="#fafad2"><b>3</b></td>
                    <td bgcolor="white"><b>10:10~11:00</b></td>
                    <td bgcolor="white"></td>
                    <td bgcolor="white"><b>10:10~10:55</b></td>
                </tr>
                <tr style="height: 60px" align="center">
                    <td bgcolor="#fafad2"><b>4</b></td>
                    <td bgcolor="white"><b>11:10~12:00</b></td>
                    <td bgcolor="white"></td>
                    <td bgcolor="white"><b>11:00~11:45</b></td>
                </tr>
                <tr style="height: 60px" align="center">
                    <td bgcolor="#fafad2"><b>5</b></td>
                    <td bgcolor="white"><b>13:10~14:00</b></td>
                    <td bgcolor="white"></td>
                    <td bgcolor="white"><b>11:50~12:35</b></td>
                </tr>
                <tr style="height: 60px" align="center">
                    <td bgcolor="#fafad2"><b>6</b></td>
                    <td bgcolor="white"><b>14:10~15:00</b></td>
                    <td bgcolor="white"></td>
                    <td bgcolor="white"><b>12:40~13:25</b></td>
                </tr>
                <tr style="height: 60px" align="center">
                    <td bgcolor="#fafad2"><b>7</b></td>
                    <td bgcolor="white"><b>15:10~16:00</b></td>
                    <td bgcolor="white"></td>
                    <td bgcolor="white"><b>13:30~14:15</b></td>
                </tr>
                <tr style="height: 60px" align="center">
                    <td bgcolor="#fafad2"><b>8</b></td>
                    <td bgcolor="white"><b>16:10~17:00</b></td>
                    <td bgcolor="white"></td>
                    <td bgcolor="white"><b>14:20~15:05</b></td>
                </tr>
                <tr style="height: 60px" align="center">
                    <td bgcolor="#fafad2"><b>9</b></td>
                    <td bgcolor="white"><b>17:10~18:00</b></td>
                    <td bgcolor="white"></td>
                    <td bgcolor="white"><b>15:10~15:55</b></td>
                </tr>
                <tr style="height: 60px" align="center">
                    <td bgcolor="#fafad2"><b>10</b></td>
                    <td bgcolor="white"><b></b></td>
                    <td bgcolor="white"><b>18:10~18:55( 產學訓一年級 17:50~18:35 )</b></td>
                    <td bgcolor="white"><b>16:00~16:45</b></td>
                </tr>
                <tr style="height: 60px" align="center">
                    <td bgcolor="#fafad2"><b>11</b></td>
                    <td bgcolor="white"><b></b></td>
                    <td bgcolor="white"><b>19:00~19:45( 產學訓一年級 18:40~19:25 )</b></td>
                    <td bgcolor="white"><b>16:50~17:35</b></td>
                </tr>
                <tr style="height: 60px" align="center">
                    <td bgcolor="#fafad2"><b>12</b></td>
                    <td bgcolor="white"><b></b></td>
                    <td bgcolor="white"><b>19:50~20:35( 產學訓一年級 19:30~20:15 )</b></td>
                    <td bgcolor="white"><b>17:40~18:25</b></td>
                </tr>
                <tr style="height: 60px" align="center">
                    <td bgcolor="#fafad2"><b>13</b></td>
                    <td bgcolor="white"><b></b></td>
                    <td bgcolor="white"><b>20:40~21:25( 產學訓一年級 20:20~21:05 )</b></td>
                    <td bgcolor="white"><b>18:30~19:15</b></td>
                </tr>
                <tr style="height: 60px" align="center">
                    <td bgcolor="#fafad2"><b>14</b></td>
                    <td bgcolor="white"><b></b></td>
                    <td bgcolor="white"><b>21:30~22:15( 產學訓一年級 21:10~21:55 )</b></td>
                    <td bgcolor="white"><b>19:20~20:05</b></td>
                </tr>
                <tr style="height: 60px" align="center">
                    <td bgcolor="#fafad2"><b>15</b></td>
                    <td bgcolor="white"><b>07:10~08:00 晨課</b></td>
                    <td bgcolor="white"></td>
                    <td bgcolor="white"><b>20:10~20:55</b></td>
                </tr>
                <tr style="height: 60px" align="center">
                    <td bgcolor="#fafad2"><b>16</b></td>
                    <td bgcolor="white"><b>12:10~13:00 午課</b></td>
                    <td bgcolor="white"></td>
                    <td bgcolor="white"><b>21:00~21:45</b></td>
                </tr>
                <tr style="height: 60px" align="center">
                    <td bgcolor="#fafad2"><b>17</b></td>
                    <td bgcolor="white"><b></b></td>
                    <td bgcolor="white"></td>
                    <td bgcolor="white"><b>07:40~08:25</b></td>
                </tr>
            </table>
        </center>
    </body>

@endsection
