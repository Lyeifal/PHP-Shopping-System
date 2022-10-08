<?php
/* Smarty version 4.1.0, created on 2022-06-06 20:33:01
  from 'E:\CodeStudyFiles\Code\PHP end exam\project22-5-28\resources\views\admin\category_edit_two.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629df3fdd601a8_37420409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd944d7a16549488eb503258a03f699a11a3453ee' => 
    array (
      0 => 'E:\\CodeStudyFiles\\Code\\PHP end exam\\project22-5-28\\resources\\views\\admin\\category_edit_two.html',
      1 => 1654445471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629df3fdd601a8_37420409 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-title">
<h2><?php if ($_smarty_tpl->tpl_vars['id']->value) {?>修改<?php } else { ?>添加<?php }?>二级分类</h2>
</div>
<div class="main-section">
    <form method="post" action="/admin/category/save_two" class="j-form">
        <ul class="form-group form-inline">
            <li>
                <input type="text" class="form-control" name="name" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['psct_cate_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" required>
                <label>二级分类名</label>
            </li>
            <li>
                <input type="number" class="form-control" name="sort" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['psct_sort'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" required>
                <label>排序值</label>
            </li>
            <select name="cid" class="form-control" style="min-width:196px;">
                <option value="0">---</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psco_cate_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['psco_cate_id'] === $_smarty_tpl->tpl_vars['data']->value['psct_onecate_id']) {?>selected<?php }?>><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psco_cate_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 </option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <label>所属一级分类</label>
            <li>
                <input type="hidden" name="id" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                <input type="submit" value="提交表单" class="btn btn-primary">
                <a href="/admin/category/index_two" class="btn btn-default">返回列表</a>
            </li>
        </ul>
    </form>
</div>
<?php echo '<script'; ?>
>
    main.menuActive('category');
    main.ajaxForm('.j-form', function () {
        main.content('/admin/category/index_two');
    });
<?php echo '</script'; ?>
><?php }
}
