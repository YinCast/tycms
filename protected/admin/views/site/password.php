<script language="JavaScript" type="text/javascript">
function page_load(){
	dialog_size(442);
	$(".form input:first").focus();
}
</script>

<div class="dialog-title">
  <h2>修改密码</h2>
  <span><a href="javascript:close_dialog();">关闭 [X]</a></span> </div>
<div class="dialog-note">
  <p>新密码长度最少6个字符</p>
</div>
<div class="form">
  <p>当前密码<br />
    <input type="password" name="oldpass" class="text m" />
  </p>
  <p>新密码<br />
    <input type="password" name="password" class="text m" />
  </p>
  <p>确认密码<br />
    <input type="password" name="passconf" class="text m" />
  </p>
</div>
<div class="dialog-bottom">
  <div class="dbleft"> <a href="javascript:close_dialog();" class="button"><span>&nbsp; 取消 &nbsp;</span></a> </div>
  <div class="dbright"> <span class="submit">
    <input type="submit" value="保存信息" />
    </span> </div>
  <div class="clear"></div>
</div>
