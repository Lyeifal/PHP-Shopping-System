<?php
/* Smarty version 4.1.0, created on 2022-06-08 11:12:54
  from 'E:\CodeStudyFiles\Code\PHP end exam\project22-5-28\resources\views\admin\image_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a013b6253218_30827952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47f8793d9aee744e5fa52d090a03e861a8ee7ab8' => 
    array (
      0 => 'E:\\CodeStudyFiles\\Code\\PHP end exam\\project22-5-28\\resources\\views\\admin\\image_list.html',
      1 => 1654570590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a013b6253218_30827952 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-title">
    <h2>图片管理</h2>
</div>
<div class="main-section">
    <div class="panel panel-default">
        <div class="main-section form-inline">
            <a href="/admin/image/edit" class="btn btn-success">+ 新增</a>
        </div>
        <div class="main-section">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>所属商品</th>
                    <th>图片id</th>
                    <th>图片</th>
                    <th>图片名</th>
                    <th>图片大小</th>
                    <th>操作</th>
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
                    <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psi_good_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                    <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psi_img_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                    <td>
                        <img class="psi_img_id" data-id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psi_img_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                             src="" weight='100px' hight='100px'><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psi_img'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                    </td>
                    <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psi_img_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                    <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psi_img_size'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
MB</td>
                    <td>
                        <a href="/admin/image/edit?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psi_img_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" style="margin-right:5px;">编辑</a>
                        <a href="/admin/image/delete?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['psi_img_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
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
<style>
    .psi_img_id{
        width: 200px;
        height: 250px;
    }
</style>
<?php echo '<script'; ?>
>
    main.menuActive('image');
    $('.j-del').click(function () {
        let res =  confirm('您确定要删除此项？');
        if (res) {
            main.ajaxPost($(this).attr('href'), function () {
                main.contentRefresh();
            });
        }
        return false;
    });
    $(document).ready(function(){
        $.ajax({
            type:"get",
            url:"/admin/image/getimage",
            dataType:"json",
            success:function (result) {
                $('.psi_img_id').each(function (index,domEle){
                    for (var i = 0;i< result.length;i++){
                        if ($(domEle).attr('data-id')== result[i]['psi_img_id']){
                            $(domEle).attr('src',result[i]['psi_img'])
                        }
                    }
                })
            }
        })
    });
<?php echo '</script'; ?>
><?php }
}
