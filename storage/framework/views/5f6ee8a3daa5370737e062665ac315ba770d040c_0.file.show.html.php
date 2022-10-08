<?php
/* Smarty version 4.1.0, created on 2022-06-08 17:21:55
  from 'E:\CodeStudyFiles\Code\PHP end exam\project22-5-28\resources\views\user\show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a06a332ac7b7_01999472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f6ee8a3daa5370737e062665ac315ba770d040c' => 
    array (
      0 => 'E:\\CodeStudyFiles\\Code\\PHP end exam\\project22-5-28\\resources\\views\\user\\show.html',
      1 => 1654680113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/sub/show.html' => 1,
    'file:user/sub/sidebar.html' => 1,
  ),
),false)) {
function content_62a06a332ac7b7_01999472 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195082095362a06a332a9b69_27339780', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "user/layout.html");
}
/* {block "content"} */
class Block_195082095362a06a332a9b69_27339780 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_195082095362a06a332a9b69_27339780',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="main-body">
    <div class="main-wrap">
      <div class="main-right">
        <?php $_smarty_tpl->_subTemplateRender("file:user/sub/show.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </div>
      <div class="main-left">
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
