<?php
/* Smarty version 4.1.0, created on 2022-06-05 22:43:18
  from 'E:\CodeStudyFiles\Code\PHP end exam\project22-5-28\resources\views\admin\category_list_two.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629cc1061084c3_56618396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5c5291ce84538788aa2f6348e7135018845b798' => 
    array (
      0 => 'E:\\CodeStudyFiles\\Code\\PHP end exam\\project22-5-28\\resources\\views\\admin\\category_list_two.html',
      1 => 1654440195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629cc1061084c3_56618396 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-title">
    <h2>二级分类</h2>
</div>
<div class="main-section">
    <div class="panel panel-default">
    <div class="main-section form-inline">
        <a href="/admin/category/edit_two" class="btn btn-success">+ 新增</a>
    </div>
    <div class="main-section">
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>排序值</th>
                <th>二级分类名</th>
                <th>所属一级分类</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if ($_smarty_tpl->tpl_vars['twocate']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['twocate']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <tr>
                <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psct_sort'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psct_cate_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psct_onecate'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                <td>
                    <a href="/admin/category/edit_two?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psct_cate_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" style="margin-right:5px;">编辑</a>
                    <a href="/admin/category/delete_two?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psct_cate_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="j-del text-danger">删除</a>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
            <tr>
                <td colspan="3" class="text-center">列表为空</td>
            </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
</div>
</div>
<?php echo '<script'; ?>
>
    main.menuActive('category');
    $('.j-del').click(function () {
        let res =  confirm('您确定要删除此项？');
        if (res) {
            main.ajaxPost($(this).attr('href'), function () {
                main.contentRefresh();
            });
        }
        return false;
    });
<?php echo '</script'; ?>
><?php }
}
