<?php
/* Smarty version 4.1.0, created on 2022-06-09 13:40:37
  from 'E:\CodeStudyFiles\Code\PHP end exam\project22-5-28\resources\views\user\shopping_order_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a187d5b0d549_05619505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7dc6f56ed372d020b306e36628cdd0221304a4bc' => 
    array (
      0 => 'E:\\CodeStudyFiles\\Code\\PHP end exam\\project22-5-28\\resources\\views\\user\\shopping_order_list.html',
      1 => 1654752528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a187d5b0d549_05619505 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-title">
    <h2>订单管理</h2>
</div>
<div class="main-section">
    <div class="panel panel-default">
        <div class="main-section">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>订单编号</th>
                    <th>购买时间</th>
                    <th>优惠</th>
                    <th>订单金额</th>
                    <th>付款金额</th>
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
                    <td><a href="/user/order/info?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['pso_order_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['pso_order_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></td>
                    <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['pso_action_time'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                    <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['pso_coupon_pric'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                    <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['pso_count_price'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                    <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['pso_real_price'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
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
    main.menuActive('order');
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
