<?php
/* Smarty version 4.1.0, created on 2022-06-09 09:14:23
  from 'E:\CodeStudyFiles\Code\PHP end exam\project22-5-28\resources\views\admin\good_add_edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a1496fd32098_04211054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '020ea390c8e4ee87a2eafa6ba15801a8c13bf9cd' => 
    array (
      0 => 'E:\\CodeStudyFiles\\Code\\PHP end exam\\project22-5-28\\resources\\views\\admin\\good_add_edit.html',
      1 => 1654665906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a1496fd32098_04211054 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-title">
  <h2><?php if ($_smarty_tpl->tpl_vars['id']->value) {?>修改<?php } else { ?>添加<?php }?>进货</h2>
</div>
<div class="main-section form-inline">
  <a href="/admin/good/edit" class="btn btn-success">+ 添加新商品</a>
</div>
<div class="main-section">
  <form method="post" action="/admin/goodadd/save" class="j-form">
    <ul class="form-group form-inline">
      <li>
        <select name="psg_good_onecate_id" onchange="getCatetwo()"class="form-control" style="min-width:196px;">
          <option value="0">---</option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res1']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
          <option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psco_cate_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" ><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psco_cate_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 </option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <label>一级分类</label>
        <select name="psg_good_twocate_id" onchange="getGood()" class="form-control" style="min-width:196px;">
          <option value="0">---</option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res2']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
          <option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psct_cate_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" ><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psct_cate_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 </option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <label>二级分类</label>
        <select name="psg_good_id" onchange="getPrice()" class="form-control" style="min-width:196px;">
          <option value="0">---</option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
          <option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psg_good_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" ><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psg_good_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 </option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <label>商品</label>
      </li>
      <li>
        <input type="text"  class="form-control" name="psg_cost_price" readonly="true" required>
        <label>价格</label>
      </li>
      <li>
        <input type="datetime-local"  class="form-control" name="psga_add_time" required>
        <label>进货时间</label>
      </li>
      <li>
        <input type="text"  class="form-control" name="psga_add_count" required>
        <label>数量</label>
      </li>
      <li>
        <input type="text"  class="form-control" name="psga_order_id" required>
        <label>单号</label>
      </li>
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
  main.menuActive('goodadd');
  main.ajaxForm('.j-form', function () {
    main.content('/admin/goodadd/index');
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
        getGood();
      }
    })
  }
  function getGood(){
    var id =$("[name='psg_good_twocate_id']").val();
    $.ajax({
      type:"get",
      url:"/admin/good/get_goodname",
      data: { 'id' : id } ,
      dataType:"json",
      success:function (result) {
        $("[name='psg_good_id']").children().remove();
        for (var i = 0;i< result.length;i++){
          var option = document.createElement("option"); //
          option.innerText=result[i]['psg_good_name'];
          option.value=result[i]['psg_good_id'];
          // if (i==0){
          //   option.attr('selected',ture);
          // }
          $("[name='psg_good_id']").append(option); // 加入option选项
        }
        getPrice();
      }
    })
  }
  function getPrice(){
    var id =$("[name='psg_good_id']").val();
    $.ajax({
      type:"get",
      url:"/admin/good/get_costprice",
      data: { 'id' : id } ,
      dataType:"json",
      success:function (result) {
        $("[name='psg_cost_price']").attr('value',result[0]['psg_cost_price']);
      }
    })
  }
<?php echo '</script'; ?>
><?php }
}
