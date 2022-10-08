<?php
/* Smarty version 4.1.0, created on 2022-06-09 13:10:26
  from 'E:\CodeStudyFiles\Code\PHP end exam\project22-5-28\resources\views\user\sub\show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a180c2d558d9_28101511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e7f5a2124c4e78e21322832b42d9e5e8c72c8a8' => 
    array (
      0 => 'E:\\CodeStudyFiles\\Code\\PHP end exam\\project22-5-28\\resources\\views\\user\\sub\\show.html',
      1 => 1654751413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a180c2d558d9_28101511 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="as">
  <?php if ($_smarty_tpl->tpl_vars['good']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['good']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
<!--    <div class="as-title"><h1><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psg_good_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h1></div>-->
    <div class="as-row">
      <span><h1>商品名：<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psg_good_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h1></span><br>
      <br><br>
      <span>预览：<br><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psi_img'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"></span><br>
      <span>价格：<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psg_sell_price'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span><br>
      <span>上架时间：<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psg_add_time'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span><br>
      <span>购买量：<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['count'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
次</span><br>
    </div>
<!--    <div class="as-content"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</div>-->
    <div class="as-change">
      <span>
        <button onclick="jian()">-</button>
        <input id="add" type="hidden" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psg_good_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
        <input id="num" type="number" value=1 data-options="min:0,max:100" style="width: 40px"  readonly>
        <button onclick="jia()">+</button>
        <button class="btn btn-success" onclick="add()">加入购物车</button>
      </span>
      <span>
        <button class="btn btn-success" onclick="buy()" >购买</button>
      </span>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php } else { ?>
    <div class="as-message">
      您查看的商品不存在。<p><a href="/">点我返回首页</a></p>
    </div>
  <?php }?>
</div>
<?php echo '<script'; ?>
>
  function add(){
    var id =$('#add').val();
    var num =$('#num').val();
    $.ajax({
      type:"get",
      url:"/user/cart/add",
      data: { 'id' : id ,'num' : num} ,
      dataType:"json",
      success:function () {
          alert('添加成功');
      }
    })
  }
  function buy(){
    var id = $('#add').val();
    var num =$('#num').val();
    $.ajax({
      type:"get",
      url:"/user/order/buyone",
      data: { 'id' : id ,'num' : num} ,
      dataType:"json",
      success:function () {
        alert('购买成功');
      }
    })
  }
  function jia(){
    var num = parseInt($('#num').val());
    if (num==100){
      $('#num').val(100);
    }else {
      num = num+1;
      $('#num').val(num);
    }
  }
  function jian(){
    var num = parseInt($('#num').val());
    if (num==1){
      $('#num').val(1);
    }else {
      num = num-1;
      $('#num').val(num);
    }
  }
<?php echo '</script'; ?>
><?php }
}
