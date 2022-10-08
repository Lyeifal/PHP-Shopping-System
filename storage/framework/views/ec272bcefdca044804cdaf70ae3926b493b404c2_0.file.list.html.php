<?php
/* Smarty version 4.1.0, created on 2022-06-09 10:54:31
  from 'E:\CodeStudyFiles\Code\PHP end exam\project22-5-28\resources\views\user\sub\list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a160e752fa40_43150917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec272bcefdca044804cdaf70ae3926b493b404c2' => 
    array (
      0 => 'E:\\CodeStudyFiles\\Code\\PHP end exam\\project22-5-28\\resources\\views\\user\\sub\\list.html',
      1 => 1654743269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a160e752fa40_43150917 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="al">
  <?php if ($_smarty_tpl->tpl_vars['good']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['good']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
      <div class="al-each">
        <div class="al-info">
          <a href="/user/index/getgood?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psg_good_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psg_good_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['v']->value['psg_good_image']) {?>
          <div class="al-img">
            <a href="/user/index/getgood?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psg_good_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
              <img class="psi_img_id" data-id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psi_img_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psi_img'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="点击阅读文章">
            </a>
          </div>
        <?php }?>
        <div class="al-more">
          <span>价格：<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psg_sell_price'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 | 发表于：<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psg_add_time'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
        </div>
      </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php } else { ?>
    <div class="al-message">
      该栏目内暂时没有内容。<p><a href="/">点击返回首页</a></p>
    </div>
  <?php }?>
</div>
<div class="pagelist"><?php echo $_smarty_tpl->tpl_vars['page_html']->value;?>
</div>
<style>
  .psi_img_id{
    width: 200px;
    height: 250px;
  }
</style><?php }
}
