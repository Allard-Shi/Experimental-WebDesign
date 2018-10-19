<?php
if (!defined("C_K")){
	exit("No Qulified!");
}

?>
<script type="text/javascript">
function del(obj)
{
  var msg = "您真的确定要删除吗？";
  if (confirm(msg)==true){
     var tr=obj.parentNode.parentNode;//得到按钮[obj]的父元素[td]的父元素[tr]
     tr.parentNode.removeChild(tr);//从tr的父元素[tbody]移除tr
    }
  else{
      return false;
    }


}   
</script>
<style>
.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover 
 {
    color: #fff;
    background-color:rgb(115, 181, 135);
}

a {
    color: #65756a;
}

.nav-pills>li>a {
    border-radius: 0px;
}
.waiting{
  color: grey;
}
.norecord{
  color: red;
}
.recorded{
  color: green;
}
#bottom{
      height: 50px;
      background: #EDEDED;
      color:grey;
      padding: 15px;
      margin-top: 10px;
    }

.pagination>.active>a{
  background:rgb(115, 181, 135);
  border-color: rgb(115, 181, 135);
}

.pagination>.active>a:hover{
  background:rgb(115, 220, 135);
  border-color: rgb(115, 220, 135);
}
.pagination>li>a{
  color: green;
}
.nav-pills>li>a:hover{
  color: green;
}
</style>
<div class="row table-responsive">
<table class="table table-hover" style="margin:30px auto; width: 700px;">
  <thead>
    <tr>
        <th>日期</th>
        <th>时间</th>
        <th>实验室</th>
        <th>设备</th>
        <th>状态</th> <!--分为已确认、未确认、待使用三个状态-->
        <th>操作</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>2018-4-27</td>
        <td>15:00-16:00</td>
        <td>实验室一</td>
        <td>XXX设备</td>
        <td><span class="waiting">待使用</span></td>
        <td><span onclick="del(this)">取消</span></td>
    </tr>
    <tr>
        <td>2018-4-25</td>
        <td>15:00-16:00</td>
        <td>实验室一</td>
        <td>XXX设备</td>
        <td><span class="norecord">未确认</span></td>
        <td><span data-toggle="modal" data-target="#myModal">登记时间</span> <span onclick="del(this)">取消</span></td>
    </tr>
    <tr>
        <td>2018-4-24</td>
        <td>16:00-17:00</td>
        <td>实验室二</td>
        <td>XXX设备</td>
        <td><span class="recorded">已确认</span></td>
        <td></td>
    </tr>
  </tbody>
</table>
</div>

<!----------->
<nav style="text-align: center;">
<ul class="pagination">
    <li><a href="#">&laquo;</a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">&raquo;</a></li>
</ul>
</nav>


<!-- 模态框-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog" style="z-index: 2000">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">请填写实际使用时间</h4>
            </div>

            <div class="modal-body" id="useintro">　
            <form role="form">
            <div class="form-group">
            <label for="time" style="padding-top: 10px">实际开始时间</label>
            <select id="starttime" class="form-control">
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

            <label for="name" style="padding-top: 10px">实际结束时间</label>
            <select id="endtime" class="form-control" style="">
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

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-success" onclick="" data-dismiss="modal">提交</button> <!--提交功能函数还没有-->
            </div>
        </div><!-- /.modal-content -->
        </div><!-- /.modal -->
 </div>