<?php
/* Smarty version 4.1.0, created on 2022-06-08 13:29:45
  from 'E:\CodeStudyFiles\Code\PHP end exam\project22-5-28\resources\views\admin\good_edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a033c9deeb79_18386936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d15f756a25d5dac67617323892a5eea4fdb2228' => 
    array (
      0 => 'E:\\CodeStudyFiles\\Code\\PHP end exam\\project22-5-28\\resources\\views\\admin\\good_edit.html',
      1 => 1654666169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a033c9deeb79_18386936 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-title">
    <h2><?php if ($_smarty_tpl->tpl_vars['id']->value) {?>修改<?php } else { ?>添加<?php }?>商品信息</h2>
</div>
<div class="main-section">
    <form method="post" action="/admin/good/save" class="j-form">
        <ul class="form-group form-inline">
            <li>
                <input type="text" class="form-control" name="psg_good_name" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['psg_good_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" required>
                <label>商品名</label>
            </li>
            <li>
                <input type="text" class="form-control" name="psg_cost_price" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['psg_cost_price'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" required>
                <label>进货价格</label>
            </li>
            <li>
                <input type="text" class="form-control" name="psg_sell_price" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['psg_sell_price'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" required>
                <label>售卖价格</label>
            </li>
            <li>
                <label>商品描述</label>
                <div><textarea class="j-content" name="psg_good_desc" style="height:200px"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['psg_good_desc'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</textarea></div>
            </li>
            <li>
                <input type="text" class="form-control" name="psg_good_unit" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['psg_good_unit'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" required>
                <label>单位</label>
            </li>
            <select name="psg_good_onecate_id" onchange="getCatetwo()"class="form-control" style="min-width:196px;">
                <option value="0">---</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res1']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psco_cate_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['psco_cate_id'] === $_smarty_tpl->tpl_vars['data']->value['psg_good_onecate_id']) {?>selected<?php }?>><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psco_cate_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 </option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <label>所属一级分类</label>
            <select name="psg_good_twocate_id" class="form-control" style="min-width:196px;">
                <option value="0">---</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res2']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psct_cate_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['psct_cate_id'] === $_smarty_tpl->tpl_vars['data']->value['psg_good_twocate_id']) {?>selected<?php }?>><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psct_cate_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 </option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <label>所属二级分类</label>
            <li>
                <label>预览图</label>
                <input type="file" name="psg_good_image">
            </li>
            <?php if ($_smarty_tpl->tpl_vars['data']->value['psg_good_image']) {?>
            <li>
                <ul class="main-imglist">
                    <li>
                        <div class="main-imglist-item">
                                <img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['psi_img'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"></a>
                        </div>
                    </li>
                </ul>
            </li>
            <?php }?>
            <li>
                <input type="hidden" name="id" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                <input type="submit" value="提交表单" class="btn btn-primary">
                <a href="/admin/category/index" class="btn btn-default">返回列表</a>
            </li>
        </ul>
    </form>
</div>
<?php echo '<script'; ?>
>
    main.menuActive('good');
    main.ajaxForm('.j-form', function () {
        main.content('/admin/good/index');
    });
    function getCatetwo() {
        var id =$("[name='psg_good_onecate_id']").val();
        $.ajax({
            type:"get",
            url:"/admin/category/get_twocate",
            data: { 'id' : id } ,
            dataType:"json",
            success:function (result) {
                $("[name='psg_good_twocate_id']").children().remove();
                for (var i = 0;i< result.length;i++){
                    var option = document.createElement("option"); //
                    option.innerText=result[i]['psct_cate_name'];
                    option.value=result[i]['psct_cate_id'];
                    $("[name='psg_good_twocate_id']").append(option); // 加入option选项
                }
            }
        })
    }
<?php echo '</script'; ?>
><?php }
}
