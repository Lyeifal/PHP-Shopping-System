<?php
/* Smarty version 4.1.0, created on 2022-06-09 13:24:31
  from 'E:\CodeStudyFiles\Code\PHP end exam\project22-5-28\resources\views\user\layout1.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a1840fbfabf2_75608095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f4eb19732040123e95ee55ff9c07c5884f1bc7d' => 
    array (
      0 => 'E:\\CodeStudyFiles\\Code\\PHP end exam\\project22-5-28\\resources\\views\\user\\layout1.html',
      1 => 1654752269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a1840fbfabf2_75608095 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/common/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/common/font-awesome-4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/static/common/toastr.js/2.1.4/toastr.min.css">
    <link rel="stylesheet" href="/static/admin/css/main.css">
    <?php echo '<script'; ?>
 src="/static/common/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/static/common/twitter-bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/static/common/toastr.js/2.1.4/toastr.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/static/admin/js/main.js"><?php echo '</script'; ?>
>
    <title>用户中心</title>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top main-nav" role="navigation">
    <div class="navbar-header">
        <!-- Bootstrap在小屏幕上显示的菜单折叠按钮 -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="navbar-brand">个人空间</div>
    </div>
    <div class="collapse navbar-collapse">
        <!--   左侧菜单栏   -->
        <div class="main-sidebar">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/user/index/index1" data-name="index">
                        <i class="fa fa-home fa-fw"></i>首页
                    </a>
                </li>
                <li>
                    <a href="/user/address/index" data-name="category">
                        <i class="fa fa-list fa-fw"></i>地址管理
                    </a>
                </li>
                <li>
                    <a href="/user/cart/index" data-name="category">
                        <i class="fa fa-list fa-fw"></i>购物车
                    </a>
                </li>
                <li>
                    <a href="/user/order/index" data-name="category">
                        <i class="fa fa-list fa-fw"></i>订单管理
                    </a>
                </li>
            </ul>
        </div>
        <!--   顶部用户信息   -->
        <ul class="nav navbar-right">
            <li>
                <a href="/user/index/index">
                    <i class="fa fa-gamepad fa-fw"></i>购物
                </a>
            </li>
            <li>
                <a href="#"><i class="fa fa-user fa-fw"></i><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
            </li>
            <li>
                <a href="/user/login/logout">
                    <i class="fa fa-power-off fa-fw"></i>退出
                </a>
            </li>
        </ul>
    </div>
</nav>
<div class="main-container">
    <!-- 内容区域 -->
    <div class="main-content">

    </div>
    <div class="main-loading" style="display:none">
        <div class="dot-carousel"></div>
    </div>
</div>
<?php echo '<script'; ?>
>
    //初始化后台布局的基本逻辑
    main.layout();
    // 页面打开后，加载内容区域
    main.contentRefresh();
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
