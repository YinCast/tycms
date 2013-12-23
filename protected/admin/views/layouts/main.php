<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/admin/css/style.css" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/admin/js/index.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/admin/js/custom.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/admin/js/visvoy.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/admin/js/dragme.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/admin/js/uploadify.css" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/admin/js/swfobject.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/admin/js/uploadify.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/admin/js/mydp/WdatePicker.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/admin/fancybox/jquery.fancybox-1.3.4.css" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/admin/fancybox/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/admin/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/admin/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<?php //Yii::app()->bootstrap->register(); ?>
</head>
<body>
<div id="wrap">
  <div id="header">
    <div id="topbar"><em><a class="button-topbar active" href="#"><span>后台首页</span></a></em><em><a class="button-topbar" href="#"><span>系统设置</span></a></em>
      <ul id="tb-left">
        <li class="logo"><a href="<?php echo $this->createUrl('/'); ?>"><?php echo CHtml::encode(Yii::app()->name); ?></a></li>
      </ul>
    </div>
    <!-- end topbar 注意：em和ul，ul和li之间不能有任何换行，否则ie6下面会出现一个空格，影响布局 -->
    <div id="navis">
      <ul class="navi" style="display: block;">
        <li><a target="_self" href="<?php echo $this->createUrl('/'); ?>" class="active"><span>后台首页</span></a></li>
        <li><a rel="ajax" target="_self" href="<?php echo $this->createUrl('site/password'); ?>"><span>修改密码</span></a></li>
        <li><a target="_blank" href="/"><span>浏览前台</span></a></li>
        <li class="last"><a target="_self" href="<?php echo $this->createUrl('site/loginout'); ?>"><span>安全退出</span></a></li>
      </ul>
      <ul class="navi" style="display: none;">
        <li><a rel="ajax" target="_self" href="<?php echo $this->createUrl('site/setup'); ?>"><span>关键字设置</span></a></li>
        <li><a target="_self" href="<?php echo $this->createUrl('site/administrator'); ?>"><span>管理员列表</span></a></li>
        <li><a target="_self" href="<?php echo $this->createUrl('site/admin_menu'); ?>"><span>后台栏目</span></a></li>
        <li class="last"><a rel="ajax" target="_self" href="<?php echo $this->createUrl('site/backup'); ?>"><span>数据备份</span></a></li>
      </ul>
    </div>
    <!-- end of navis --> 
  </div>
  <!-- end of header -->
  <div id="container">
    <div id="side">
      <div id="menu">
        <ul>
        <a class="active" target="_self" href="<?php echo $this->createUrl('/'); ?>">后台首页</a>
          <span>我的帐号</span>
          <li><a href="<?php echo $this->createUrl('site/password'); ?>" rel="ajax">admin</a></li>
          <li><a href="/" target="_blank">浏览前台</a></li>
          <li><a href="<?php echo $this->createUrl('site/loginout'); ?>">退出</a></li>
          <a href="<?php echo $this->createUrl('site/link'); ?>" rel="ajax">我的链接 [+]</a>
        </ul>
      </div>
      <!-- end menu -->
      <div id="copyright">
        <p>技术支持: <a href="http://www.thinkyii.com" target="_blank">ThinkYii</a>
        <p> 
      </div>
      <!-- end copyright --> 
    </div>
    <!-- end side -->

  <?php echo $content; ?>

  <!-- end content --> 
  </div>
  <!-- end container --> 
</div>
<!-- end wrap -->
</body>
</html>