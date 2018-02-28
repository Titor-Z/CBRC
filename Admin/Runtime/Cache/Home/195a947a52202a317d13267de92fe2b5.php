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
    <link href="/Public/css/custom.css" rel="stylesheet">
    <style>
        input[type='checkbox'] {
            height: 20px;
            width: 20px;
        }
    </style>
</head>

<body>
<!-- Position Begin. -->
<div class="x-nav">
    <span class="layui-breadcrumb">
          <a href="">首页</a>
          <a href="">演示</a>
          <a><cite>导航元素</cite></a>
    </span>
    <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:30px">ဂ</i>
    </a>
</div> <!-- Position End. -->

<div class="x-body">
    <div class="layui-row">
        <form class="layui-form layui-col-md12 x-so">
            <input class="layui-input" placeholder="开始日" name="start" id="start">
            <input class="layui-input" placeholder="截止日" name="end" id="end">
            <input type="text" name="username" placeholder="请输入用户名" autocomplete="off" class="layui-input">
            <button class="layui-btn" lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
        </form>
    </div>
    <xblock>
        <button class="layui-btn layui-btn-danger" data-btn="deleteAll" data-action="<?php echo ($disable_user_href); ?>">
            <i class="layui-icon"></i>批量删除
        </button>
        <button class="layui-btn" onclick="x_admin_show('<?php echo ($add_user_page_title); ?>','<?php echo ($add_user_page_href); ?>',800,600)"><i class="layui-icon"></i>添加
        </button>
        <span id="countItem" class="x-right" style="line-height:40px">共有数据：<i><?php echo count($result)?></i> 条</span>
    </xblock>
    <div class="table-res">
    <table class="layui-table">
        <thead>
        <tr>
            <th><input name="check[]" data-check="option" type="checkbox" data-checkBtn></th>
            <th>ID</th>
            <th>姓名</th>
            <th>年龄</th>
            <th>性别</th>
            <th>身体状况</th>
            <th>病历史</th>
            <th>联系人</th>
            <th>电话</th>
            <th>手机</th>
            <th>地址</th>
            <th>填表人和捐献者关系</th>
            <th>其他留言</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php for($i=0; $i<count($result); $i++) { ?>
        <tr>
            <td><input name="check[]" data-check="option" type="checkbox" value="<?php echo ($result[$i][id]); ?>"></td>
            <td><?php echo ($result[$i][id]); ?></td>
            <td><?php echo ($result[$i][donorname]); ?></td>
            <td><?php echo ($result[$i][donorage]); ?></td>
            <td><?php echo ($result[$i][donorsex]); ?></td>
            <td><?php echo ($result[$i][donorps]); ?></td>
            <td><?php echo ($result[$i][donormh]); ?></td>
            <td><?php echo ($result[$i][contactname]); ?></td>
            <td><?php echo ($result[$i][contacttel]); ?></td>
            <td><?php echo ($result[$i][contactphone]); ?></td>
            <td><?php echo ($result[$i][contactaddress]); ?></td>
            <td><?php if($result[$i][contactcadr]=='0') {echo'本人';}else if($result[$i][contactcadr]=='1'){echo '亲属';}else if($result[$i][contactcadr]=='2'){echo '其他';} ?></td>
            <td><?php echo ($result[$i][contactothermessage]); ?></td>
            <td class="td-manage">
                <a title="编辑"  onclick="show(this)" href="javascript:void(0)" data-btn="edit" data-user="<?php echo ($result[$i][id]); ?>" data-pagehref="<?php echo ($edit_user_page_href); ?>" data-username="<?php echo ($result[$i][username]); ?>">
                    <i class="layui-icon">&#xe642;</i>
                </a>
                <a title="删除" onclick="del(this)" href="javascript:void(0)" data-btn="delete" data-user="<?php echo ($result[$i][id]); ?>" data-pagehref="<?php echo ($disable_user_href); ?>" data-username="<?php echo ($result[$i][donorname]); ?>">
                    <i class="layui-icon">&#xe640;</i>
                </a>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
    </div>
    <div class="page">
        <div>
            <a class="prev" href="">&lt;&lt;</a>
            <a class="num" href="">1</a>
            <span class="current">2</span>
            <a class="num" href="">3</a>
            <a class="num" href="">489</a>
            <a class="next" href="">&gt;&gt;</a>
        </div>
    </div>
</div>


<!-- Jquery Library -->
<script src="/Public/script/jquery.min.js"></script>
<!-- LayUI Library -->
<script src="/Public/lib/layui/layui.js"></script>
<!-- Xadmin JS -->
<script src="/Public/script/xadmin.js"></script>
<!-- Public Library -->
<script src="/Public/script/public.js"></script>
<script src="/Public/script/plugin.js"></script>
<script>
    // 编辑用户模板显示:
    function show(who) {
        var obj = $(who),
            user = obj.attr('data-user'),
            username = obj.attr('data-username'),
            href = obj.attr('data-pagehref')+'?id='+user;
        x_admin_show('编辑&nbsp;'+ username,href,900,600);
    }

    // 禁用用户
    function disable(who) {
        var obj = $(who),
            user = obj.attr('data-user'),
            username = obj.attr('data-username'),
            href = obj.attr('data-pagehref')+'?id='+user;
        // 显示对话框，名称和跳转地址为json动态添加的内容，
        layer.confirm('禁用&nbsp;'+ username, function () {
            $.post(href, {
                data: {
                    id: user,
                    username : username
                }
            },function (res) {
                layer.msg(res,function () {
                    window.location.reload();
                });
            });
        });
    }

    // 删除用户
    function del(who) {
        var obj = $(who),
            user = obj.attr('data-user'),
            username = obj.attr('data-username'),
            href = obj.attr('data-pagehref')+'?id='+user,
            modality = obj.attr('data-btn');
        layer.confirm('删除&nbsp;'+ username, function () {
            $.post(href, {
                data: {
                    id: user,
                    modality: modality,
                    username : username
                }
            },function (res) {
                layer.msg(res,function () {
                    window.location.reload();
                });
            });
        });
    }
</script>
<script>
    (function () {
        layui.use('layer',function () {
            var layer = layui.layer;
        });
        // 定义操作项：
        var tablePanel = $(".x-body"),
            delAllBtn = tablePanel.find("[data-btn='deleteAll']");

        delAllBtn.click(function () {
            var items = checkedArr("input[data-check]");
            var modality = $(this).data('btn'),
                action = $(this).data('action');

            layer.confirm("确认删除",function () {
                var data = {
                    'modality': modality,
                    'items': items
                };
                $.post(action,{data:data},function (res) {
                    layer.msg(res, function () {
                        window.location.reload();
                    });
                });
            });
        });
    })();
</script>
</body>
</html>