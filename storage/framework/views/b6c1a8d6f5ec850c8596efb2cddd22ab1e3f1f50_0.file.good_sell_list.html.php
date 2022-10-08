<?php
/* Smarty version 4.1.0, created on 2022-06-09 13:39:17
  from 'E:\CodeStudyFiles\Code\PHP end exam\project22-5-28\resources\views\admin\good_sell_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a18785d08f79_19815873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6c1a8d6f5ec850c8596efb2cddd22ab1e3f1f50' => 
    array (
      0 => 'E:\\CodeStudyFiles\\Code\\PHP end exam\\project22-5-28\\resources\\views\\admin\\good_sell_list.html',
      1 => 1654753155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a18785d08f79_19815873 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-title">
    <h2>出货单</h2>
</div>
<div class="main-section">
    <div class="panel panel-default">
        <div class="main-section">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>订单编号</th>
                    <th>商品名</th>
                    <th>单价</th>
                    <th>数量</th>
                    <th>出货时间</th>
                </tr>
                </thead>
                <tbody>
                <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <tr>
                    <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psgs_order_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                    <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psgs_good_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                    <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psgs_good_price'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                    <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psgs_sell_count'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                    <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psgs_sell_time'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
<!--                    <td>-->
<!--                        <a href="/admin/goodsell/edit?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psgs_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" style="margin-right:5px;">编辑</a>-->
<!--                        <a href="/admin/goodsell/delete?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psgs_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="j-del text-danger">删除</a>-->
<!--                    </td>-->
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
    main.menuActive('goodsell');
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
