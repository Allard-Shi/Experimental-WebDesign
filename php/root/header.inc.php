<?php
 if (!defined("PT_AT")){
	 exit("No Qulification！");
 }
 if (PHP_VERSION<"4.5.0"){
	exit("Low PHP Version!");
 }
 define("C_K",true);
?>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="container-fluid">
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
      <div class="navbar-header" style="maegin:10">
      <a class="navbar-brand crawler-logo"href="">导航栏 </a>
      </div>
	  
      <div>
	  <ul class="nav navbar-nav navbar-right hidden-sm">
      <form class="navbar-form navbar-left" role="search" method="post" action="php/search.php" onsubmit="func_check()"><!--查找-->
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">搜索</button>
      </form>
       <li target="_blank"><a href="./homepage.php">首页</a></li>
       <li><a href="">网站介绍</a></li><!//添加>
        <li><a href="./about.php">关于</a></li>
		 <?php
		  include "./php/public_function/cookie_start.php";
          //include "./php/public_function/database_init.php";
          if(_judge()==3){
			  echo"
			  <li><a href='./usercenter.php'>".$_COOKIE['username']."</a></li>
			  <li class='dropdown'>
              <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
               <img src='photos/icon3.png' class='img-circle img-responsive img-thumbnail' height='35px' width='35px' style='margin-top:-10px;'> <span class='caret'></span>
                 </a>
			  <ul class='dropdown-menu'>
                <li><a href='./usercenter.php'>个人中心</a></li>
				<li><a href='./equipments.php'>开始预约</a></li>
                <li class='divider'></li>
                <li><a href='php/public_function/cookie_exit.php'>退出</a></li>
                </ul>
			  </li>
			  ";	  
          }
          else{
           echo "<li><a href='./login.php'>登录|注册</a></li>";
		}
		 ?>
		
          <li><a></a></li>
          </ul>
          </div>
          </div>
          </nav>
</div>
</div>