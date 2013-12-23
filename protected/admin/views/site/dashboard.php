<div class="col-2 fl">
<h6>系统信息</h6>
<div class="content">
    <table class="table_panel">
        <tbody>
        <tr>
            <th>程序版本：</th>
            <td><?php echo SOFT_VERSION; ?> (<?php echo SOFT_RELEASE; ?>)</td>
        </tr>
        <tr>
            <th>操作系统及 PHP：</th>
            <td><?php echo $serverinfo; ?></td>
        </tr>
        <tr>
            <th>服务器软件：</th>
            <td><?php echo $_SERVER['SERVER_SOFTWARE']; ?></td>
        </tr>
        <tr>
            <th>MySQL 版本：</th>
            <td><?php echo $dbversion; ?></td>
        </tr>
        <tr>
            <th>上传许可：</th>
            <td><?php echo $fileupload; ?></td>
        </tr>
        <tr>
            <th>当前数据库尺寸：</th>
            <td><?php echo $dbsize; ?></td>
        </tr>
        <tr>
            <th>主机名：</th>
            <td><?php echo $_SERVER['SERVER_NAME'] .'('. $_SERVER['SERVER_ADDR'] .':'.$_SERVER['SERVER_PORT'].')'; ?></td>
        </tr>
        <tr>
            <th>软件授权码：</th>
            <td><?php echo $license_key; ?></td>
        </tr>
        </tbody>
    </table>
</div>
</div>  