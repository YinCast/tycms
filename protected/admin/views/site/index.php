<div class="box left"> <b class="b1"></b><b class="b2"></b><b class="b3"></b>
  <div class="bdiv">
    <div class="btop">
      <h2>平台<em>Platform</em></h2>
      <em>网站运行环境摘要</em> </div>
    <div class="warning">您已经一周没有备份过数据文件了，建议现在<a href="<?php echo $this->createUrl('site/backup'); ?>" rel="ajax">备份</a></div>
    <!-- <div class="warning">您还没有创建数据备份，建议现在<a href="<?php echo $this->createUrl('site/backup'); ?>" rel="ajax">备份</a></div>
    <div class="notice">上次<a href="<?php echo $this->createUrl('site/backup'); ?>" rel="ajax">数据备份</a>时间：
    </div> -->
    <div class="bmain box-wrap">
      <p>网站名称：<a href="../" target="_blank">
        </a></p>
      <p>平台版本：v
      </p>
      <p>引擎类型：PHP v
      </p>
      <p>数据库：
      </p>
      <p class="more"><a href="<?php echo $this->createUrl('site/setup'); ?>" rel="ajax">开始设置&raquo;</a></p>
    </div>
  </div>
  <b class="b3b"></b><b class="b2b"></b><b class="b1b"></b> </div>
<div class="box right"> <b class="b1"></b><b class="b2"></b><b class="b3"></b>
  <div class="bdiv">
    <div class="btop">
      <h2>管理员<em>Administrator</em></h2>
      <em>您当前登录帐号的信息</em> </div>
    <div class="warning">您的密码为系统初始密码，请尽快<a href="<?php echo $this->createUrl('site/password'); ?>" rel="ajax">修改</a></div>
    <div class="bmain box-wrap">
      <p>当前帐号：
      </p>
      <p>帐号权限：
      </p>
      <p>登录IP：
      </p>
      <p>登录次数：
      </p>
      <p class="more"><a href="<?php echo $this->createUrl('site/password'); ?>" rel="ajax">修改密码&raquo;</a> 
    </div>
  </div>
  <b class="b3b"></b><b class="b2b"></b><b class="b1b"></b> </div>
<div class="clear"></div>
<div class="box left"> <b class="b1"></b><b class="b2"></b><b class="b3"></b>
  <div class="bdiv">
    <div class="btop">
      <h2>网站<em>Server</em></h2>
      <em>网站信息摘要</em> </div>
    <div class="bmain box-wrap" style="height:116px;">
      <p>网站域名：<?php echo $_SERVER['SERVER_NAME'] .'('. $_SERVER['SERVER_ADDR'] .':'.$_SERVER['SERVER_PORT'].')'; ?>
      </p>
      <p>网站IP：
      </p>
      <p>当前编码：
      </p>
      <p>缓存类型：
      </p>
      <p>网站日志：
      </p>
      <p>软件授权码：<?php echo $license_key; ?>
      </p>
    </div>
  </div>
  <b class="b3b"></b><b class="b2b"></b><b class="b1b"></b> </div>
<div class="box right"> <b class="b1"></b><b class="b2"></b><b class="b3"></b>
  <div class="bdiv">
    <div class="btop">
      <h2>服务器<em>Server</em></h2>
      <em>服务器信息摘要</em> </div>
    <div class="bmain box-wrap" style="height:116px;">
      <p>时区设置：
      </p>
      <p>上传上限：
      </p>
      <p>安全模式：
      </p>
      <p>socket支持：
      </p>
      <p>zlib支持：
      </p>
      <p>服务器软件：<?php echo $_SERVER['SERVER_SOFTWARE']; ?>
      </p>
    </div>
  </div>
  <b class="b3b"></b><b class="b2b"></b><b class="b1b"></b> </div>
<div class="clear"></div>