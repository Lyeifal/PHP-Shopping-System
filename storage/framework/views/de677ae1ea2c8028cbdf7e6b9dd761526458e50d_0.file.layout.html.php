<?php
/* Smarty version 4.1.0, created on 2022-06-08 11:53:51
  from 'E:\CodeStudyFiles\Code\PHP end exam\project22-5-28\resources\views\admin\layout.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a01d4f7bf3a1_72169534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de677ae1ea2c8028cbdf7e6b9dd761526458e50d' => 
    array (
      0 => 'E:\\CodeStudyFiles\\Code\\PHP end exam\\project22-5-28\\resources\\views\\admin\\layout.html',
      1 => 1654660427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a01d4f7bf3a1_72169534 (Smarty_Internal_Template $_smarty_tpl) {
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
  <title>后台管理系统</title>
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
      <div class="navbar-brand">网上购物后台管理系统</div>
    </div>
    <div class="collapse navbar-collapse">
      <!--   左侧菜单栏   -->
      <div class="main-sidebar">
        <ul class="nav navbar-nav">
          <li>
            <a href="/admin/index/index" data-name="index">
              <i class="fa fa-home fa-fw"></i>首页
            </a>
          </li>
          <li>
            <a id="cates" data-name="category">
              <i class="fa fa-list fa-fw"></i>分类管理
            </a>
            <a class="cate" style="display:none" href="/admin/category/index_one" data-name="category">
              <i class="fa fa-file-o fa-fw"></i>一级分类
            </a>
            <a class="cate" style="display:none" href="/admin/category/index_two" data-name="category">
              <i class="fa fa-file-o fa-fw"></i>二级分类
            </a>
          </li>
          <li>
            <a id="goods" data-name="article">
              <i class="fa fa-list fa-fw"></i>商品管理
            </a>
            <a class="good" style="display:none" href="/admin/good/index">
              <i class="fa fa-file-o fa-fw"></i>商品信息
            </a>
            <a class="good" style="display:none" href="/admin/goodadd/index">
              <i class="fa fa-file-o fa-fw"></i>进货表
            </a>
            <a class="good" style="display:none" href="/admin/goodsell/index">
              <i class="fa fa-file-o fa-fw"></i>出货表
            </a>
          </li>
          <li>
            <a href="/admin/order/index" data-name="category">
              <i class="fa fa-list fa-fw"></i>订单管理
            </a>
          </li>
          <li>
            <a href="/admin/image/index" data-name="category">
              <i class="fa fa-list fa-fw"></i>图片管理
            </a>
          </li>
        </ul>
      </div>
      <!--   顶部用户信息   -->
      <ul class="nav navbar-right">
        <li>
          <a href="#"><i class="fa fa-user fa-fw"></i><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
        </li>
        <li>
          <a href="/admin/login/logout">
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
    $('#goods').click(
            function (){
              if ($('.good').css('display')=='none'){
                $('.good').css('display','block');
              }else{
                $('.good').css('display','none');
              }
            }
    )
    $('#cates').click(
            function (){
              if ($('.cate').css('display')=='none'){
                $('.cate').css('display','block');
              }else{
                $('.cate').css('display','none');
              }
            }
    )
  <?php echo '</script'; ?>
>
</body>
</html><?php }
}
