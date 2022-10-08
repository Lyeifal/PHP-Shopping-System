<?php
/* Smarty version 4.1.0, created on 2022-06-06 00:12:25
  from 'E:\CodeStudyFiles\Code\PHP end exam\project22-5-28\resources\views\admin\category_edit_one.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629cd5e95e6b52_28785013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65be5c86a4bfd4ba67d2af7040531355cc15cbc9' => 
    array (
      0 => 'E:\\CodeStudyFiles\\Code\\PHP end exam\\project22-5-28\\resources\\views\\admin\\category_edit_one.html',
      1 => 1654445466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629cd5e95e6b52_28785013 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-title">
  <h2><?php if ($_smarty_tpl->tpl_vars['id']->value) {?>修改<?php } else { ?>添加<?php }?>一级分类</h2>
</div>
<div class="main-section">
  <form method="post" action="/admin/category/save_one" class="j-form">
    <ul class="form-group form-inline">
      <li>
        <input type="text" class="form-control" name="name" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['psco_cate_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" required>
        <label>一级分类名</label>
      </li>
      <li>
        <input type="number" class="form-control" name="sort" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['psco_sort'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" required>
        <label>排序值</label>
      </li>
      <li>
        <input type="hidden" name="id" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
        <input type="submit" value="提交表单" class="btn btn-primary">
        <a href="/admin/category/index_one" class="btn btn-default">返回列表</a>
      </li>
    </ul>
  </form>
</div>
<?php echo '<script'; ?>
>
  main.menuActive('category');
  main.ajaxForm('.j-form', function () {
    main.content('/admin/category/index_one');
  });
<?php echo '</script'; ?>
><?php }
}
