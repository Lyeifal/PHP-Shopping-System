<?php
/* Smarty version 4.1.0, created on 2022-06-05 21:52:01
  from 'E:\CodeStudyFiles\Code\PHP end exam\project22-5-28\resources\views\admin\good.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629cb5014110b7_25472393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fc890ecc0bd413ebdce94982f0b80308895b51f' => 
    array (
      0 => 'E:\\CodeStudyFiles\\Code\\PHP end exam\\project22-5-28\\resources\\views\\admin\\good.html',
      1 => 1654437118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629cb5014110b7_25472393 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">商品管理 </a> <span class="sr-only">(current)</span></li>
                <li><a href="#">进货表</a></li>
                <li><a href="#">出货表</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!--<div class="main-container">-->
    <!-- 内容区域 -->
    <div class="main-content">

    </div>
    <div class="main-loading" style="display:none">
        <div class="dot-carousel"></div>
    </div>
<!--</div>-->
<?php echo '<script'; ?>
>
    //初始化后台布局的基本逻辑
    main.layout();
    // 页面打开后，加载内容区域
    main.contentRefresh();
<?php echo '</script'; ?>
><?php }
}
