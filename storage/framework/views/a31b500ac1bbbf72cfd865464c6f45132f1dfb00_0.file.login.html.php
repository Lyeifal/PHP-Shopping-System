<?php
/* Smarty version 4.1.0, created on 2022-06-04 15:50:52
  from 'E:\CodeStudyFiles\Code\PHP end exam\project22-5-28\resources\views\admin\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629b0edc987ae7_57059456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a31b500ac1bbbf72cfd865464c6f45132f1dfb00' => 
    array (
      0 => 'E:\\CodeStudyFiles\\Code\\PHP end exam\\project22-5-28\\resources\\views\\admin\\login.html',
      1 => 1654329050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629b0edc987ae7_57059456 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/common/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/common/toastr.js/2.1.4/toastr.min.css">
    <link rel="stylesheet" href="/static/admin/css/main.css">
    <?php echo '<script'; ?>
 src="/static/common/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/static/common/twitter-bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/static/common/toastr.js/2.1.4/toastr.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/static/admin/js/main.js"><?php echo '</script'; ?>
>
    <title>登录</title>
</head>
<body class="login">
<div class="container">
    <form method="post" action="/admin/login/login" class="j-login">
        <h1>后台管理系统</h1>
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="用户名" required>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="密码" required>
        </div>
        <div class="form-group">
            <input type="text" name="captcha" class="form-control" placeholder="验证码" required>
        </div>
        <div class="form-group">
            <div class="login-captcha"><img src="/admin/login/captcha" alt="captcha"></div>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-lg btn-success" value="登录">
        </div>
        <div>
            <input type="button" class="btn btn-lg btn-success" id="register" value="注册">
        </div>
    </form>
    <div class="main-loading" style="display:none">
        <div class="dot-carousel"></div>
    </div>
</div>
<?php echo '<script'; ?>
>
    $('.login-captcha img').click(
        function () {
            $(this).attr('src', '/admin/login/captcha?_=' + Math.random());
        }
    );
    main.ajaxForm(
        '.j-login',
        function () {
            location.href = '/admin/index/index'
        },
        function () {
            $('.login-captcha img').click();
        }
    );
    $('#register').click(
        function () {
            location.href='/admin/register/index';
        }
    );

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
