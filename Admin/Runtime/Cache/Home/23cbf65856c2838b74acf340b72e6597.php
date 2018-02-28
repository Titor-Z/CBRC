<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<title><?php echo ($page_title); ?></title>
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-siteapp">

    <link href="/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/images/logo.ico" rel="shortcut icon" type="image/x-icon">
    <link href="/Public/css/font.css" rel="stylesheet">
	<link href="/Public/css/xadmin.css" rel="stylesheet">
</head>
<body class="login-bg">
<div class="login">
    <div class="message bg-danger"><?php echo ($form_title); ?></div>
    <div id="darkbannerwrap"></div>
    <form method="post" class="layui-form" action="<?php echo ($form_action); ?>">
        <input class="mb-3 form-control" name="username" type="text" placeholder="请输入用户名" lay-verify="required">
        <input class="mb-3 form-control" name="password" type="password" placeholder="请输入用户名" lay-verify="required">
        <input class="bg-danger" value="登录" lay-submit lay-filter="login" style="width:100%;" type="button">
    </form>
    <footer class="h5 text-center mt-5 mb-0 text-muted">&copy; 2018 邯郸爱眼医院</footer>
</div>


<!-- Jquery Library -->
<script src="/Public/script/jquery.min.js"></script>
<!-- LayUI Library -->
<script src="/Public/lib/layui/layui.js"></script>
<!-- Xadmin JS -->
<script src="/Public/script/xadmin.js"></script>
<script>
    (function () {
        $("[lay-submit]").click(function () {
            var data = {
                'username' : $("[name='username']").val(),
                'password' : $("[name='password']").val()
                },
                action = $("form").attr("action");

            $.post(action,{'data': data}, function (res) {
                console.log(res);
                if(res['state']== 'success') {
                    // console.info(res);
                    window.location.href = res['href'];
                }
            });
        });
    })();
</script>
</body>
</html>