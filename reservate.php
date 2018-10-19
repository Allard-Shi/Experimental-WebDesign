<!DOCTYPE html>
<?php
/*
=====================================
Copyright:Xian Jiaotong University
Auther:Li Yamin  Shi Wen  Zhang Yifan
===================================== 
Date:2017-7-10
Web:


*/
define("PT_AT",true);
define("RP_CO",true);
define("C_K",true);
/*if ($_POST['verti']!="act"){
		exit("Wrong Access!");
	}*/
echo "<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name='description' content=''>
    <meta name='author' content=''>
  <title>Reservation</title>
  <link href='bootstrap/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' type='text/css' media='screen'  href='CSS/bootstrap-datetimepicker.min.css'>  

    <style type='text/css'>
 body
 {
  background-color: #EDEDED;
  font-family: '微软雅黑' 'sans-serif';
  color: #333;
 }
 #banner_1
 {
  background-color: #33CC66;
  background-size: 100%;
  height: 400px
 }
     #bottom{
      height: 50px;
      background: white;
      color:grey;
      padding: 15px;
    }
    .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover 
    {
    background-color: #33CC66;
}
a {
    color: grey;
    text-decoration: none;
}
.btn-success {
    color: #fff;
    background-color: rgb(51, 204, 102);
    border-color: #33cc66;
}
.btn-success:hover{
    background-color: rgb(126, 218, 156);
    border-color: #a8e4bc;
    color: #fff;
}


.res-table{
  position: relative;
}
.res-bar1{
  background-color: rgba(51, 204, 102, 0.57);
  position: absolute;
  width: 11.2%;
  height: 400px;
  left: 33.55%;
  top: 20%;
  z-index: 1000;
}
.modal-backdrop{z-index:0;}
.tb_body{
      width: 120px;
    height: 100%;
    position: relative;
    background-color: #fff;
    border-right: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    cursor: pointer;
}

.tb_header{
    width: 120px;
    height: 75px;
    color: black;
    padding-top: 20px;
    border-bottom: 2px solid #ddd;
    text-align: center;
    background-color: #FCFCFC;
}

.tb_day {
    width: 120px;
    height: 100%;
    float: left;
}

.tb_body {
    width: 120px;
    height: 100%;
    position: relative;
    background-color: #fff;
    border-right: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    cursor: pointer;
}
.tb_body:hover{
  background-color: #FAFAFA;
}
.time_line{
  width: 50px;
  padding-top:70px;
  float: left;
  margin-left: 100px;
}

.list-unstyled {
    padding-left: 0;
    list-style: none;
}

.ul{
  margin-bottom: 10px;
  margin-top: 0px;
}

.time_line li {
    height: 40px;
}

#newDiv{
  height:100px;
  float: left;
  background: pink;
}

</style>
</head>
<body>
<script type='text/javascript' src='bootstrap/js/jquery-3.2.1.min.js'></script>
<script type='text/javascript' src='bootstrap/js/bootstrap.min.js'></script>
<script type='text/javascript'  src='js/bootstrap-datetimepicker.min.js'></script>
<script type='text/javascript'  src='js/bootstrap-datetimepicker.zh-CN.js'></script>
<script type='text/javascript'>
    var addDiv = function(){
        var $div = $('#table');
        $div.append('<div class='res-bar1' data-toggle='popover' title='预约信息' data-content='预约人：XXX；预约时间：9：00-17：00'>添加</div>');
    }
</script>

<script>
$(function (){
    $('[data-toggle='popover']').popover();
});
</script>

<script type='text/javascript'>
function myFunction()
{

x=document.getElementById('demo') // 找到元素
x.style.color='#ff0000';          // 改变样式
}
</script>

<!--导航栏-->
<?php
   require dirname(_FILE_).'/php/root/header.inc.php';
?>

<!--Banner-->
<div class='jumbotron masthead'  id='banner_1'>
   <div class='container'>
        <h1 class='animate-box' style='color: white;margin-top: 150px;font-size: 50px' align='center'>实验室预约管理系统</h1>
        <p style='color: white;' align='center'>西安交通大学生物分析技术与仪器研究所</p>
    <p class='masthead-button-links'>
        <!--<a class='btn btn-lg btn-primary btn-shadow' href='http://ibati.xjtu.edu.cn/' target='_blank' role='button' onclick='_hmt.push(['_trackEvent', 'masthead', 'click', 'know_more1'])'>进入官网</a>-->
      </p>
   </div>
</div>

<!--中间主体部分-->
<div class='container' style='background-color: white;margin:50px;padding: 30px'>
<ol class='breadcrumb' style='width: 300px'>
    <li><a href='#'>Home</a></li>
    <li><a href='#'>实验室一</a></li>
    <li class='active'>什么什么仪器</li>
</ol>

<h3 style='text-align: center;float: center'>
2018年5月20日-2018年5月26日
</h2>

<div class='btn-group btn-right' style='float: right;'>
    <button type='button' class='btn btn-default'><span class='glyphicon glyphicon-chevron-left'></span></button>
    <button type='button' class='btn btn-default'>本周</button>
    <button type='button' class='btn btn-default'><span class='glyphicon glyphicon-chevron-right'></span></button>
</div>
<div class='res-table' id='table' style='height: 675px; padding-top: 60px'>
<div class=>
</div>

<ul class='time_line list-unstyled'>
           <li>8:00</li><li>9:00</li><li>10:00</li><li>11:00</li><li>12:00</li><li>13:00</li><li>14:00</li><li>15:00</li><li>16:00</li><li>17:00</li><li>18:00</li><li>19:00</li><li>20:00</li><li>21:00</li><li>22:00</li><li>23:00</li>        
</ul>

<!--表格主体部分-->
<div class='tb_day' id='Sun'>
    <div class='tb_header'>
        <div>星期日</div>
        <div class='tb_date'>5月20日</div>
    </div>
    <div class='tb_body' data-toggle='modal' data-target='#myModal'  id='Sunday'>
    </div>
</div>

<div class='tb_day' id='Mon'>
    <div class='tb_header'>
        <div>星期一</div>
        <div class='tb_date'>5月21日</div>
    </div>
    <div class='tb_body' data-toggle='modal' data-target='#myModal' id='Monday'>
    </div>
</div>

<div class='tb_day' id='Tue'>
    <div class='tb_header'>
        <div>星期二</div>
        <div class='tb_date'>5月22日</div>
    </div>
    <div class='tb_body' data-toggle='modal' data-target='#myModal' id='Tuesday'>
    </div>
</div>

<div class='tb_day' id='Wed'>
    <div class='tb_header'>
        <div>星期三</div>
        <div class='tb_date'>5月23日</div>
    </div>
    <div class='tb_body' data-toggle='modal' data-target='#myModal' id='Wednesday'>
    </div>
</div>

<div class='tb_day' id='Thu'>
    <div class='tb_header'>
        <div>星期四</div>
        <div class='tb_date'>5月24日</div>
    </div>
    <div class='tb_body' data-toggle='modal' data-target='#myModal' id='Thursday'>
    </div>
</div>

<div class='tb_day' id='Fri'>
    <div class='tb_header'>
        <div>星期五</div>
        <div class='tb_date'>5月25日</div>
    </div>
    <div class='tb_body' data-toggle='modal' data-target='#myModal' id='Friday'>
    </div>
</div>

<div class='tb_day' id='Sat'>
    <div class='tb_header'>
        <div>星期六</div>
        <div class='tb_date'>5月26日</div>
    </div>
    <div class='tb_body' data-toggle='modal' data-target='#myModal' id='Saturday'>
    </div>
</div>








<!--模态框-->
        <div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' data-backdrop='true'>
        <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                <h4 class='modal-title' id='myModalLabel'>开始预约</h4>
            </div>

            <div class='modal-body' id='useintro'>　
            <p>您预约的是<span style='font-weight: bold;'>实验室</span>一的<span style='font-weight: bold;'>什么什么仪器</span></p>
            <p>您预约的时间是<span style='font-weight: bold;' id='reser-time'>2017年XX月XX日</span></p>
            <form role='form'>
            <div class='form-group'>
            <label for='name' style='padding-top: 10px'>预约人</label>
            <input type='text' class='form-control' id='name' placeholder='请输入预约人姓名'>

            <label for='time' style='padding-top: 10px'>开始时间</label>
            <select id='starttime' class='form-control'>
            <option>8:00</option>
            <option>9:00</option>
            <option>10:00</option>
            <option>11:00</option>
            <option>12:00</option>
            <option>13:00</option>
            <option>14:00</option>
            <option>15:00</option>
            <option>16:00</option>
            <option>17:00</option>
            <option>18:00</option>
            <option>19:00</option>
            <option>20:00</option>
            <option>21:00</option>
            <option>22:00</option>
            <option>23:00</option>
            </select>

            <label for='name' style='padding-top: 10px'>结束时间</label>
            <select id='endtime' class='form-control' style=''>
            <option>9:00</option>
            <option>10:00</option>
            <option>11:00</option>
            <option>12:00</option>
            <option>13:00</option>
            <option>14:00</option>
            <option>15:00</option>
            <option>16:00</option>
            <option>17:00</option>
            <option>18:00</option>
            <option>19:00</option>
            <option>20:00</option>
            <option>21:00</option>
            <option>22:00</option>
            <option>23:00</option>
            <option>24:00</option>           
            </select>

            </form>
            </div>
            </div>

            <div style='padding: 30px'>
            <p>1、实验室内仪器由专人负责，仪器专管员有义务向使用人员介绍、说明仪器的操作规程和使用注意事项，并负责处理在实验过程中出现的各种问题。</p>
            <p>2、仪器专管员要监督使用人员做好使用记录，以便掌握仪器的使用情况，并做好使用记录的保管工作。</p>
            <p>3、定期对仪器进行必要的维护和保养，保证仪器的正常使用，满足实验的需要。</p>
            <p>4、做好试剂的分类、保管工作。</p>
            <p>5、负责实验室的卫生工作，保持实验室的清洁、卫生。</p>
            <p>6、离开实验室时确保门窗水电关闭，认真检查后方可离开。</p>
            </div>

            <div class='modal-footer'>
                <button type='button' class='btn btn-default' data-dismiss='modal'>关闭</button>
                <button type='button' class='btn btn-success' onclick='adddiv()' data-dismiss='modal'>提交</button>
            </div>
        </div><!-- /.modal-content -->
        </div><!-- /.modal -->
        </div>
</div>

</div>


<!--Bottom Copyright-->
<?
 require dirname(_FILE_).'/php/root/foot.inc.php';
?>
</body>


<script>
$(function(){
  $('div.tb_body').click(function(e){  
    var addid;  
    addid=this.id;
    addElementDiv(addid);

  })
})


function adddiv()
{
  addElementDiv(addid);
}

function addElementDiv(obj) {
　　　　var parent = document.getElementById(obj);
 
　　　　//添加 div
　　　　var div = document.createElement('div');
 
　　　　//设置 div 属性，如 id
　　　　div.setAttribute('id', 'newDiv');
　　　　div.innerHTML = '预约人：XXX；预约时间：9：00-17：00';
　　　　parent.appendChild(div);
}
</script>

</html>";
?>