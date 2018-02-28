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
    <style>
        input[type='checkbox'] {
            height: 20px;
            width: 20px;
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body>
<div class="x-body">
    <form class="layui-form" action="<?php echo ($action); ?>" data-modality="<?php echo ($modality); ?>">
        <input name="id" type="hidden" value="<?php echo ($result[id]); ?>">
        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>登录名
            </label>
            <div class="layui-input-inline">
                <input type="text" id="username" name="username" required="" lay-verify="required"
                       autocomplete="off" class="layui-input" placeholder="请输入用户名" value="<?php echo ($result[username]); ?>">
            </div>
            <div class="layui-form-mid layui-word-aux">
                <span class="x-red">*</span>将会成为您唯一的登入名
            </div>
        </div>
        <div class="layui-form-item">
            <label for="L_pass" class="layui-form-label">
                <span class="x-red">*</span>密码
            </label>
            <div class="layui-input-inline">
                <input type="password" id="L_pass" name="pass" required="" lay-verify="pass"
                       autocomplete="off" class="layui-input" placeholder="更改密码请在这里输入">
            </div>
            <div class="layui-form-mid layui-word-aux">
                6到16个字符
            </div>
        </div>
        <div class="layui-form-item">
            <label for="L_repass" class="layui-form-label">
                <span class="x-red">*</span>确认密码
            </label>
            <div class="layui-input-inline">
                <input type="password" id="L_repass" name="repass" required="" lay-verify="repass"
                       autocomplete="off" class="layui-input" placeholder="请输入与上方一致的密码">
            </div>
        </div>
        <?php if($modality=='edit') { ?>
            <div class="layui-form-item">
                <label class="layui-form-label">用户状态</label>
                <div class="layui-input-block">
                    <?php $result[state]=='1'? $checked='checked': $checked='' ;?>
                    <input type="checkbox" <?php echo ($checked); ?> name="state" lay-skin="switch" lay-filter="switchTest" lay-text="启用|禁用" value="<?php echo ($result[state]); ?>">
                    <div class="layui-unselect layui-form-switch layui-form-onswitch" lay-skin="_switch">
                        <em>启用</em><i>禁用</i>
                    </div>
                </div>
            </div>
        <?php }?>
        <div class="layui-form-item">
            <label for="L_repass" class="layui-form-label"></label>
            <button class="layui-btn" type="button">修改</button>
        </div>
    </form>
</div>


<!-- Jquery Library -->
<script src="/Public/script/jquery.min.js"></script>
<!-- LayUI Library -->
<script src="/Public/lib/layui/layui.js"></script>
<!-- Xadmin JS -->
<script src="/Public/script/xadmin.js"></script>
<script src="/Public/script/public.js"></script>
<script>
    layui.use(['form', 'layer'], function () {
        $ = layui.jquery;
        var form = layui.form,
            layer = layui.layer;

        //自定义验证规则
        form.verify({
            nikename: function (value) {
                if (value.length < 5) {
                    return '昵称至少得5个字符啊';
                }
            }
            , pass: [/(.+){6,12}$/, '密码必须6到12位']
            , repass: function (value) {
                if ($('#L_pass').val() != $('#L_repass').val()) {
                    return '两次密码不一致';
                }
            }
        });

        // 使用layui 的监听方法，为switch 开关设置value值，用以传入数据库使用：
        form.on('switch', function(data){
            console.log(data.elem.checked); //开关是否开启，true或者false
            data.elem.checked===true ? data.elem.value = 1 : data.elem.value = '0';
            console.log(data.elem.value); //开关value值，也可以通过data.elem.value得到
        });
        var form        = $("form"),
            modality    = form.attr('data-modality'),
            form_action = form.attr("action"),
            btn         = form.find("button"),
            layerIndex  = parent.layer.getFrameIndex(window.name);

        btn.click(function () {
            var username = form.find("#username").val(),
                password = form.find("#L_repass").val().trim(),
                state    = form.find("[name=state]").val(),
                id       = form.find("[name=id]").val().trim();
            var data = {
                username : username,
                password : password,
                modality : modality,
                state    : state,
                id       : id
            };

            // 对密码进行筛选，当密码没有进行更改操作，传入后台的值去除密码项：
            if(data.password == "" || data.username.length == '0'){
                delete data.password;
            }
            if(data.id == "" || data.id.length == '0'){
                delete data.id;
            }
            console.info(data);
            $.post(form_action,{data:data},function (res) {
                parent.layer.close(layerIndex); //再执行关闭
                parent.layer.msg(res, {
                    icon: 1,
                    time: 2000
                }, function () {
                    this.location.reload();
                });  //弹出信息
            });
        });
    });
</script>
</body>
</html>