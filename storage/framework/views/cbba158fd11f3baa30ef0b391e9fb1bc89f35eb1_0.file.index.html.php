<?php
/* Smarty version 4.1.0, created on 2022-06-08 15:51:31
  from 'E:\CodeStudyFiles\Code\PHP end exam\project22-5-28\resources\views\user\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a05503caf292_50622365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbba158fd11f3baa30ef0b391e9fb1bc89f35eb1' => 
    array (
      0 => 'E:\\CodeStudyFiles\\Code\\PHP end exam\\project22-5-28\\resources\\views\\user\\index.html',
      1 => 1654674690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/sub/slide.html' => 1,
    'file:user/sub/list.html' => 1,
    'file:user/sub/sidebar.html' => 1,
  ),
),false)) {
function content_62a05503caf292_50622365 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136103329762a05503ca8af7_02857709', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "user/layout.html");
}
/* {block "content"} */
class Block_136103329762a05503ca8af7_02857709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_136103329762a05503ca8af7_02857709',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (!$_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->_subTemplateRender("file:user/sub/slide.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
<div class="main-body">
    <div class="main-wrap">
        <div class="main-right">
            <!-- 文章列表 -->
            <?php $_smarty_tpl->_subTemplateRender("file:user/sub/list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="main-left">
            <!-- 侧边栏 -->
            <?php $_smarty_tpl->_subTemplateRender("file:user/sub/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>
</div>
<?php
}
}
/* {/block "content"} */
}
