<?php
/* Smarty version 4.1.0, created on 2022-06-09 12:53:21
  from 'E:\CodeStudyFiles\Code\PHP end exam\project22-5-28\resources\views\admin\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a17cc1e9dad5_25236393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaa4f67dc8796e2e109e105a0a5d0ac8938160da' => 
    array (
      0 => 'E:\\CodeStudyFiles\\Code\\PHP end exam\\project22-5-28\\resources\\views\\admin\\index.html',
      1 => 1654739038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a17cc1e9dad5_25236393 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-title">
  <h2>首页</h2>
</div>
<div class="main-section">
  <div class="panel panel-default">
    <div class="panel-heading">欢迎访问</div>
    <div class="panel-body">欢迎进入网上购物管理系统！</div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">服务器信息</div>
    <ul class="list-group">
      <li class="list-group-item">
        系统环境：<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['server_info']->value['server_version'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

      </li>
      <li class="list-group-item">
        MySQL版本：<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['server_info']->value['mysql_version'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

      </li>
      <li class="list-group-item">
        文件上传限制：<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['server_info']->value['upload_max_filesize'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

      </li>
      <li class="list-group-item">
        脚本执行时限：<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['server_info']->value['max_execution_time'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

      </li>
      <li class="list-group-item">
        服务器时间：<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['server_info']->value['server_time'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

      </li>
    </ul>
  </div>
</div>
<?php echo '<script'; ?>
>
  main.menuActive('index');
<?php echo '</script'; ?>
><?php }
}
