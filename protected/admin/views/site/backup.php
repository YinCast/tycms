<script language="JavaScript" type="text/javascript">
function page_load(){
	dialog_size(450);
	$("#backup_form").attr("target","_blank").submit(function(){
		close_dialog();
	});
}
</script>

<div class="dialog-title">
  <h2>数据备份</h2>
  <span><a href="javascript:close_dialog();">关闭 [X]</a></span> </div>
<div class="dialog-note">
  <p>服务器数据备份目录是 /data/backup</p>
  <p>对于数据量很大的数据库，建议使用分卷备份</p>
</div>
<div class="form">
  <ul class="halfside">
    <li>数据库名称<br>
      huamao</li>
    <li class="right">备份方式<br>
      <label style="vertical-align: middle;">
        <input type="radio" checked="checked" value="full" name="way" style="vertical-align: middle;">
        完整备份</label>
      &nbsp;
      <label style="vertical-align: middle;">
        <input type="radio" value="part" name="way" style="vertical-align: middle;">
        分卷备份</label>
    </li>
    <li>保存位置<br>
      <label style="vertical-align: middle;">
        <input type="radio" checked="checked" value="server" name="place" style="vertical-align: middle;">
        到服务器</label>
      &nbsp;
      <label style="vertical-align: middle;">
        <input type="radio" value="download" name="place" style="vertical-align: middle;">
        下载备份文件</label>
    </li>
    <li class="right">其他设置<br>
      <label style="vertical-align: middle;">
        <input type="checkbox" value="1" name="compress" style="vertical-align: middle;">
        压缩备份文件</label>
    </li>
  </ul>
</div>
<div class="dialog-bottom">
  <div class="dbleft"> <a href="javascript:close_dialog();" class="button"><span>&nbsp; 取消 &nbsp;</span></a> </div>
  <div class="dbright"> <span class="submit">
    <input type="submit" value="开始备份" />
    </span> </div>
  <div class="clear"></div>
</div>
