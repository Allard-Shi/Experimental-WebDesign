<?
if (!defined("C_K")){
	exit("No Qulified!");   
}
   session_start();
   define("DA",true);
   include "./php/public_function/database_init.php";
   $inputnetid=mysqli_real_escape_string($link,$_COOKIE['username']);
   $sqlstr="select * from User where User_Name='".$inputnetid."'";
   $result =mysqli_query($link,$sqlstr);
   $row=mysqli_fetch_array($result);
   $tel=$row['User_Tel'];
   $credit=$row['User_Credit'];
   $mail=$row['User_Mail'];
?>
<!--需要对用户的数据进行实时反映-->
<div class="row table-responsive">
<table class="table table-hover" style="margin:30px auto; width: 700px;">

  <tbody>
    <tr>
      <td>姓名</td>
      <td>张三</td>

    </tr>
    <tr>
    <td>职称</td>
    <td>暂无</td>
    </tr>
    <tr>
      <td>学院</td>
      <td>暂无</td>

    </tr>
    <tr>
      <td>权限等级</td>
      <td>Lv.<? echo $credit?></td>

    </tr>
    <tr>
      <td>联系方式</td>
      <td><? echo $tel?></td>

    </tr>
    <tr>
      <td>E-mail</td>
      <td><? echo $mail?></td>

    </tr>
    <tr>
      <td>办公室地址</td>
      <td>暂无</td>

    </tr>
  </tbody>
</table>
</div>
<form>
<div style="margin: 0 auto;text-align: center;">
<button type="button" class="btn btn-success" >修改资料</button>
</div>
</form>