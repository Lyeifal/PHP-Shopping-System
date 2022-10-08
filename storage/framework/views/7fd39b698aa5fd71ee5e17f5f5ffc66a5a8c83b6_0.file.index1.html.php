<?php
/* Smarty version 4.1.0, created on 2022-06-09 09:59:31
  from 'E:\CodeStudyFiles\Code\PHP end exam\project22-5-28\resources\views\user\index1.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a15403ea99a6_98245957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fd39b698aa5fd71ee5e17f5f5ffc66a5a8c83b6' => 
    array (
      0 => 'E:\\CodeStudyFiles\\Code\\PHP end exam\\project22-5-28\\resources\\views\\user\\index1.html',
      1 => 1654739038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a15403ea99a6_98245957 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-title">
    <h2>首页</h2>
</div>
<div class="main-section">
    <div class="panel panel-default">
        <div class="panel-heading">欢迎访问</div>
        <div class="panel-body">个人空间</div>
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
