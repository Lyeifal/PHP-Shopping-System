<?php
/* Smarty version 4.1.0, created on 2022-06-09 13:06:56
  from 'E:\CodeStudyFiles\Code\PHP end exam\project22-5-28\resources\views\user\layout.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a17ff05eb339_05938691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a19cd52ec14eee00361f5e18c99a777099fc4817' => 
    array (
      0 => 'E:\\CodeStudyFiles\\Code\\PHP end exam\\project22-5-28\\resources\\views\\user\\layout.html',
      1 => 1654744539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a17ff05eb339_05938691 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 网上购物系统</title>
    <link rel="stylesheet" href="/static/css/style.css">
<!--    <link rel="stylesheet" href="/static/common/twitter-bootstrap/3.4.1/css/bootstrap.min.css">-->
<!--    <link rel="stylesheet" href="/static/common/font-awesome-4.2.0/css/font-awesome.min.css">-->
    <?php echo '<script'; ?>
 src="/static/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/static/js/common.js"><?php echo '</script'; ?>
>
<!--    <?php echo '<script'; ?>
 src="/static/common/twitter-bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>-->
</head>
<body>
<!--页面顶部-->
<div class="top">
    <div class="top-container">
        <div class="top-logo">
            <a href="./">
                <img src="/static/images/25.gif" alt="网上购物系统">
            </a>
        </div>
        <div class="top-nav">
        <a href="/user/index/index">首页</a>
        <a href="/user/cart/index">购物车</a>
        <a href="/user/index/index1?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['user_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" >个人中心</a>
          <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
        <a href="/user/login/logout" >退出登录</a>
          <?php } else { ?>
        <a href="/user/login/index" >登录</a>
        <a href="/user/register/index" >注册</a>
          <?php }?>
        </div>
        <div class="top-toggle jq-toggle-btn"><i></i><i></i><i></i></div>
    </div>
</div>
<!--页面内容-->
<div class="main">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151066623462a17ff05ea906_12417957', "content");
?>

</div>
<!--页面尾部-->
<div class="footer">PHP内容管理系统　本系统仅供参考和学习</div>
</body>
</html><?php }
/* {block "content"} */
class Block_151066623462a17ff05ea906_12417957 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_151066623462a17ff05ea906_12417957',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
