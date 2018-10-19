<?php
if (!defined("RP_CO")){
	exit("No Qulified!");
}
?>
<script>
$(document).ready (function(){
$("#reservationaction1").click(function(){
	$.post("./reservate.php",{name:$("#context_head").attr("name"),verti:"act"
	});
	
	
	
	
	
});
});
</script>
<div class="tab-pane fade" id="reservation_ch1" >
	<ol class="breadcrumb" style="margin-top: 10px">
    <li><a href="#reservation1" data-toggle="pill" role="tab">Equipments</a></li>
    <li><a href="#reservation_ch1" data-toggle="pill" role="tab">Reservation</a></li>
    </ol>



       <div class="col-sm-12">
        <div class="thumbnail" style="padding:30px">
            <img class="lazy" src="photos/example.jpg" width="300" height="150" data-src="" alt="lalala">
            <h3 style="text-align: center;" id="context_head">仪器名字 <br><small style="text-align: center;">已使用次数：</small>
            </h3>
            <div style="" id="context_example">内容：介绍/注意事项</div>
         <!--
          <div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"  style="text-align: center;">
                <a data-toggle="collapse" data-parent="#accordion" 
                href="#collapseOne">
                使用说明-点击展开
                </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
                This is an example for instruction.
            </div>
        </div>
    </div>
</div>

<script>
$(function () { $('#collapseFour').collapse({
        toggle: false
    })});
    $(function () { $('#collapseTwo').collapse('show')});
    $(function () { $('#collapseThree').collapse('toggle')});
    $(function () { $('#collapseOne').collapse('hide')});
</script>
-->
<!-- 模态框（Modal） -->
<!-- 按钮触发模态框 -->

        
        <div style="margin: 0 auto;text-align: center;">
        <button class="btn btn-default" data-toggle="modal" data-target="#myModal">使用说明</button>
		<button class="btn btn-success" style="width: 80px" id="reservationaction1" name="reservationaction1" >预约</button><!--预约设计-->
        </div>
        <!-- 模态框（Modal） -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">使用说明</h4>
            </div>
            <div class="modal-body" id="useintro">　
             <p>注意事项</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <!--<button type="button" class="btn btn-primary">提交更改</button>-->
            </div>
        </div><!-- /.modal-content -->
        </div><!-- /.modal -->
        </div>

        </div><!---->
        </div>
		
		
</div>