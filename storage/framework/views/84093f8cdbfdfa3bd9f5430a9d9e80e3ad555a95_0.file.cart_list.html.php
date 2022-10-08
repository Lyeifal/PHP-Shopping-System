<?php
/* Smarty version 4.1.0, created on 2022-06-09 13:06:47
  from 'E:\CodeStudyFiles\Code\PHP end exam\project22-5-28\resources\views\user\cart_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a17fe76c8446_04795290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84093f8cdbfdfa3bd9f5430a9d9e80e3ad555a95' => 
    array (
      0 => 'E:\\CodeStudyFiles\\Code\\PHP end exam\\project22-5-28\\resources\\views\\user\\cart_list.html',
      1 => 1654750775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a17fe76c8446_04795290 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-title">
    <h2>购物车</h2>
</div>
<div class="main-section">
    <div class="panel panel-default">
        <div class="main-section form-inline">
            <button id="c1" class="btn btn-success">全选</button>
            <button id="b2" class="btn btn-success">全不选</button>
            <button id="b3" class="btn btn-success">反选</button>
        </div>
        <div class="main-section">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th></th>
                    <th>商品名</th>
                    <th>单价</th>
                    <th>购买数量</th>
                    <th>总价</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if ($_smarty_tpl->tpl_vars['cart']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <tr>
                    <td><input type="checkbox" name="interst" value="<?php ob_start();
echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psc_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
$_prefixVariable1 = ob_get_clean();
echo mb_convert_encoding(htmlspecialchars($_prefixVariable1, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"></td>
                    <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                    <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['price'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                    <td><span class="count" type="num"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psc_good_num'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span></td>
                    <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['total'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                    <td>
                        <a href="/user/cart/delete?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psc_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
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
        <div class="main-section form-inline">
            <a onclick="buy()" class="btn btn-success">购买</a>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    main.menuActive('cart');
    $("#c1").click(function(){
        $("input[name='interst']").each(function() {
            this.checked="checked";
        });
    });
    $("#b2").click(function(){
        $("input[name='interst']").each(function() {
            this.checked="";
        });
        // $("input[name='interst']").attr("checked","");
    });
    $("#b3").click(function(){
        $("input[name='interst']").each(function(){
            if(this.checked){
                this.checked="";
            }else{
                this.checked="checked";
            }
        });
    });
    $('.j-del').click(function () {
        let res =  confirm('您确定要删除此项？');
        if (res) {
            main.ajaxPost($(this).attr('href'), function () {
                main.contentRefresh();
            });
        }
        return false;
    });
    function buy(){
        var id = [];
        $("input[name='interst']").each(function() {
            if(this.checked){
                id.push(this.value);
            }
        });
        $.ajax({
            type:"get",
            url:"/user/order/buycart",
            data: { 'id' : id } ,
            dataType:"json",
            success:function () {
                alert('购买成功');
            }
        })
    }
<?php echo '</script'; ?>
><?php }
}
