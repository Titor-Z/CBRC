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
<div class="x-body">
    <form class="layui-form" action="<?php echo ($action); ?>" data-modality="<?php echo ($modality); ?>">
        <input name="id" type="hidden" value="<?php echo ($result[id]); ?>">
        <legend>申请人信息</legend>
        <div class="layui-form-item">
            <label for="donor_name" class="layui-form-label">
                <span class="x-red">*</span>姓名
            </label>
            <div class="layui-input-inline">
                <input type="text" id="name" name="name" required="" lay-verify="name"
                       autocomplete="off" class="layui-input" placeholder="请输入姓名" value="<?php echo ($result['name']); ?>">
            </div>
        </div>

        <div class="layui-form-item">
            <label for="age" class="layui-form-label">
                <span class="x-red">*</span>年龄
            </label>
            <div class="layui-input-inline">
                <input type="number" min="1" id="age" name="age" required="" lay-verify="age"
                       autocomplete="off" class="layui-input" placeholder="请输入年龄" value="<?php echo ($result['age']); ?>">
            </div>
        </div>
        <!-- 性别 Begin. -->
        <div class="layui-form-item">
            <label class="layui-form-label">
                <span class="x-red">*</span>性别
            </label>
            <div class="layui-input-block">
                <input type="radio" name="sex" value="1" title="男" checked>
                <div class="layui-unselect layui-form-radio layui-form-radioed">
                    <i class="layui-anim layui-icon layui-anim-scaleSpring"></i>
                    <span>男</span>
                </div>
                <input type="radio" name="sex" value="0" title="女">
                <div class="layui-unselect layui-form-radio">
                    <i class="layui-anim layui-icon"></i>
                    <span>女</span>
                </div>
            </div>
        </div> <!-- 性别 End. -->
        <!-- 职业 Start. -->
        <div class="layui-form-item">
            <label for="job" class="layui-form-label">职业</label>
            <div class="layui-input-inline">
                <input type="text" min="1" id="job" name="job" required="" lay-verify="job"
                       autocomplete="off" class="layui-input" placeholder="请输入职业" value="<?php echo ($result['job']); ?>">
            </div>
        </div> <!-- 职业 End. -->
        <!-- 婚否 Begin. -->
        <div class="layui-form-item">
            <label class="layui-form-label">
                <span class="x-red">*</span>婚姻状况
            </label>
            <div class="layui-input-block">
                <input type="radio" name="marriage" value="1" title="未婚" checked>
                <div class="layui-unselect layui-form-radio layui-form-radioed">
                    <i class="layui-anim layui-icon layui-anim-scaleSpring"></i>
                    <span>未婚</span>
                </div>
                <input type="radio" name="marriage" value="0" title="已婚">
                <div class="layui-unselect layui-form-radio">
                    <i class="layui-anim layui-icon"></i>
                    <span>已婚</span>
                </div>
                <input type="radio" name="marriage" value="0" title="离婚">
                <div class="layui-unselect layui-form-radio">
                    <i class="layui-anim layui-icon"></i>
                    <span>离婚</span>
                </div>
                <input type="radio" name="marriage" value="0" title="离异">
                <div class="layui-unselect layui-form-radio">
                    <i class="layui-anim layui-icon"></i>
                    <span>离异</span>
                </div>
            </div>
        </div> <!-- 婚否 End. -->
        <!-- 身体状况 Start. -->
        <div class="layui-form-item layui-form-text">
            <label for="ps" class="layui-form-label">
                <span class="x-red">*</span>身体状况
            </label>
            <div class="layui-input-block">
                <textarea class="layui-textarea" id="ps" name="ps" placeholder="请输入捐献者目前的身体状况"><?php echo ($result['ps']); ?></textarea>
            </div>
        </div> <!-- 身体状况 End. -->
        <!-- 疾病史 Start. -->
        <div class="layui-form-item layui-form-text">
            <label for="MH" class="layui-form-label">疾病史</label>
            <div class="layui-input-block">
                <textarea class="layui-textarea" id="mh" name="mh" placeholder="如有捐献者有疾病史，请在这里输入。如若没有，则可以忽略"><?php echo ($result['mh']); ?></textarea>
            </div>
        </div> <!-- 疾病史 End. -->
        <!-- 眼部手术 Start. -->
        <div class="layui-form-item layui-form-text">
            <label for="eyeSurgery" class="layui-form-label">眼部手术史</label>
            <div class="layui-input-block">
                <textarea class="layui-textarea" id="eyeSurgery" name="eyeSurgery" placeholder="如有捐献者有疾病史，请在这里输入。如若没有，则可以忽略"><?php echo ($result['eyesurgery']); ?></textarea>
            </div>
        </div> <!-- 眼部手术 End. -->
        <!-- 药物过敏 Start. -->
        <div class="layui-form-item layui-form-text">
            <label for="drugallergy" class="layui-form-label">药物过敏史</label>
            <div class="layui-input-block">
                <textarea class="layui-textarea" id="drugallergy" name="drugAllergy" placeholder="如有捐献者有疾病史，请在这里输入。如若没有，则可以忽略"><?php echo ($result['drugallergy']); ?></textarea>
            </div>
        </div> <!-- 药物过敏 End. -->
        <!-- 合并症 Start. -->
        <div class="layui-form-item layui-form-text">
            <label for="complication" class="layui-form-label">合并症</label>
            <div class="layui-input-block">
                <textarea class="layui-textarea" id="complication" name="complication" placeholder="如有捐献者有疾病史，请在这里输入。如若没有，则可以忽略"><?php echo ($result['complication']); ?></textarea>
            </div>
        </div> <!-- 合并症 End. -->
        <!-- 当地诊断结果 Start. -->
        <div class="layui-form-item layui-form-text">
            <label for="diagnosis" class="layui-form-label">当地诊断结果</label>
            <div class="layui-input-block">
                <textarea class="layui-textarea" id="diagnosis" name="diagnosis" placeholder="如有捐献者有疾病史，请在这里输入。如若没有，则可以忽略"><?php echo ($result['diagnosis']); ?></textarea>
            </div>
        </div> <!-- 当地诊断结果 End. -->

        <legend>关系人信息</legend>
        <!-- 联系人 Begin. -->
        <div class="layui-form-item">
            <label for="contactName" class="layui-form-label">
                <span class="x-red">*</span>联系人
            </label>
            <div class="layui-input-inline">
                <input type="text" id="contactName" name="contactName" required lay-verify="contactName"
                       autocomplete="off" class="layui-input" placeholder="请输入联系人姓名" value="<?php echo ($result['contactname']); ?>">
            </div>
        </div> <!-- 联系人 End. -->
        <!-- 电话 Begin. -->
        <div class="layui-form-item">
            <label for="contactTel" class="layui-form-label">
                <span class="x-red">*</span>电话
            </label>
            <div class="layui-input-inline">
                <input type="number" id="contactTel" name="contactTel" lay-verify="contactTel"
                       autocomplete="off" class="layui-input"  placeholder="请输入联系人电话" value="<?php echo ($result['contacttel']); ?>">
            </div>
        </div> <!-- 电话 End. -->
        <!-- 手机 Begin. -->
        <div class="layui-form-item">
            <label for="contactPhone" class="layui-form-label">
                <span class="x-red">*</span>手机
            </label>
            <div class="layui-input-inline">
                <input type="number" id="contactPhone" name="contactPhone" lay-verify="contactPhone"
                       autocomplete="off" class="layui-input" placeholder="请输入联系人手机" value="<?php echo ($result['contactphone']); ?>">
            </div>
        </div> <!-- 手机 End. -->
        <!-- 地址 Begin. -->
        <div class="layui-form-item layui-form-text">
            <label for="contactAddress" class="layui-form-label">
                <span class="x-red">*</span>地址
            </label>
            <div class="layui-input-block">
                <textarea class="layui-textarea" id="contactAddress" name="contactAddress" placeholder="请输入联系人地址"><?php echo ($result['contactaddress']); ?></textarea>
            </div>
        </div> <!-- 地址 End. -->
        <!-- 关系人 Begin. -->
        <div class="layui-form-item">
            <label for="donor_Age" class="layui-form-label">
                <span class="x-red">*</span>关系人
            </label>
            <div class="layui-input-block">
                <input type="radio" name="contactCADR" value="1" title="本人" checked>
                <div class="layui-unselect layui-form-radio layui-form-radioed">
                    <i class="layui-anim layui-icon layui-anim-scaleSpring"></i>
                    <span>本人</span>
                </div>
                <input type="radio" name="contactCADR" value="0" title="亲属">
                <div class="layui-unselect layui-form-radio">
                    <i class="layui-anim layui-icon"></i>
                    <span>亲属</span>
                </div>
                <input type="radio" name="contactCADR" value="0" title="其他">
                <div class="layui-unselect layui-form-radio">
                    <i class="layui-anim layui-icon"></i>
                    <span>其他</span>
                </div>
            </div>
        </div> <!-- 关系人 End. -->
        <!-- 其他留言 Begin. -->
        <div class="layui-form-item layui-form-text">
            <label for="otherMes" class="layui-form-label">其他留言</label>
            <div class="layui-input-block">
                <textarea class="layui-textarea" id="otherMes" name="otherMes" placeholder="在这里输入要告诉我们的话"><?php echo ($result['othermessage']); ?></textarea>
            </div>
        </div> <!-- 其他留言 End. -->
        <div class="layui-form-item">
            <label for="L_repass" class="layui-form-label">
            </label>
            <button class="layui-btn" lay-filter="add" lay-submit="" type="button">增加</button>
        </div>
    </form>
</div>
<!-- Jquery Library -->
<script src="/Public/script/jquery.min.js"></script>
<!-- LayUI Library -->
<script src="/Public/lib/layui/layui.js"></script>
<!-- Xadmin JS -->
<script src="/Public/script/xadmin.js"></script>
<!-- Public Library -->
<script src="/Public/script/public.js"></script>

<script>
    (function () {
        layui.use('layer',function () {
            var layer = layui.layer;
            // 添加用户操作：
            var form        = $("form"),
                modality    = form.attr('data-modality'),
                form_action = form.attr("action"),
                btn         = form.find("button"),
                layerIndex  = parent.layer.getFrameIndex(window.name);

            btn.click(function () {
                var name       = valSet(form.find("[name=name]")),
                    age        = form.find("[name=age]").val(),
                    sex        = form.find("[name=sex]").val(),
                    job        = valSet(form.find("[name=job]")),
                    ps         = valSet(form.find("[name=ps]")),
                    mh         = valSet(form.find("[name=mh]")),
                    marriage         = form.find("[name=marriage]").val(),
                    diagnosis         = valSet(form.find("[name=diagnosis]")),
                    complication         = valSet(form.find("[name=complication]")),
                    contact_name     = valSet(form.find("[name=contactName]")),
                    contact_tel      = valSet(form.find("[name=contactTel]")),
                    eye_surgery      = valSet(form.find("[name=eyeSurgery]")),
                    drug_allergy      = valSet(form.find("[name=drugAllergy]")),
                    contact_phone    = valSet(form.find("[name=contactPhone]")),
                    contact_address  = valSet(form.find("[name=contactAddress]")),
                    cadr     = form.find("[name=cadr]").val(),
                    otherMes = valSet(form.find("[name=otherMes]")),
                    id               = form.find("[name=id]").val();
                var data = {
                    id          : id,
                    ps          : ps,
                    mh          : mh,
                    marriage    : marriage,
                    modality    : modality,
                    age         : age,
                    sex         : sex,
                    job         : job,
                    name        : name,
                    diagnosis   : diagnosis,
                    eyeSurgery  : eye_surgery,
                    contactTel  : contact_tel,
                    drugAllergy : drug_allergy,
                    contactName : contact_name,
                    cadr        : cadr,
                    complication: complication,
                    contactPhone: contact_phone,
                    contactAddress  : contact_address,
                    OtherMessage    : otherMes
                };

                if(data.id == "" || data.id.length == '0'){
                    delete data.id;
                }

                var new_data = removeArrNull(data);
                console.info(new_data);
                $.post(form_action,{data:new_data},function (res) {
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
    })();
</script>
</body>
</html>