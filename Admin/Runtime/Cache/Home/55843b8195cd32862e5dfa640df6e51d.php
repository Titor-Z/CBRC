<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title><?php echo ($page_title); ?></title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=no">

    <link href="/Public/images/logo.ico" rel="shortcut icon" type="image/x-icon">
    <link href="/Public/css/font.css" rel="stylesheet">
    <link href="/Public/css/xadmin.css" rel="stylesheet">
</head>

<body>
<!-- 顶部开始 -->
<div class="container">
    <div class="logo"><a href="./index.html"><?php echo ($site_title); ?></a></div>
    <div class="left_open">
        <i title="展开左侧栏" class="iconfont">&#xe699;</i>
    </div>
    <ul class="layui-nav right" lay-filter="">
        <li class="layui-nav-item">
            <a href="javascript:void(0)"><?php echo ($user_name); ?></a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
                <dd><a onclick="x_admin_show('个人信息','<?php echo ($admin_info_href); ?>',600,300)">个人信息</a></dd>
                <dd><a data-logout="<?php echo ($logout_action); ?>" href="javascript:void(0)">退出</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item to-index"><a href="/" target="_blank">前台首页</a></li>
    </ul>

</div>
<!-- 顶部结束 -->
<!-- 中部开始 -->
<!-- 左侧菜单开始 -->
<div class="left-nav">
    <div id="side-nav">
        <ul id="nav">
            <li>
                <a href="javascript:void(0)">
                    <i class="iconfont">&#xe6b8;</i>
                    <cite>资料管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="<?php echo ($donor_user_href); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>捐献者列表</cite>
                        </a>
                    </li>
                    <li>
                        <a _href="<?php echo ($apply_user_href); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>申请者列表</cite>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i class="iconfont">&#xe726;</i>
                    <cite>管理员管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="<?php echo ($admin_list_href); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>管理员列表</cite>
                        </a>
                    </li>
                    <li>
                        <a _href="<?php echo ($doctor_list_href); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>医生列表</cite>
                        </a>
                    </li>
                </ul>
            </li>
        </ul> <!-- #nav End. -->
    </div> <!-- #Side nav End. -->
</div> <!-- 左侧菜单结束 -->

<!-- 右侧主体开始 -->
<div class="page-content">
    <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
        <ul class="layui-tab-title">
            <li>开始</li>
        </ul>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <iframe src='./welcome.html' frameborder="0" scrolling="yes" class="x-iframe"></iframe>
            </div>
        </div>
    </div>
</div>
<div class="page-content-bg"></div>
<!-- 右侧主体结束 -->
<!-- 中部结束 -->
<!-- 底部开始 -->
<div class="footer">
    <div class="copyright">&copy; 2018 Titor .All Rights Reserved.</div>
</div>
<!-- 底部结束 -->


<!-- Jquery Library -->
<script src="/Public/script/jquery.min.js"></script>
<!-- LayUI Library -->
<script src="/Public/lib/layui/layui.js"></script>
<!-- Xadmin JS -->
<script src="/Public/script/xadmin.js"></script>
<script>
    (function () {
        $("[data-logout]").click(function () {
            var action = $(this).attr('data-logout');
            $.post(action, {'data': ''}, function (res) {
                // console.log(res);
                window.location.href = res['action'];
            });
        });
    })();
</script>
</body>
</html>