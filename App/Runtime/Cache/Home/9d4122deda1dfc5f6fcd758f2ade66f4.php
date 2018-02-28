<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>联系人信息</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/css/layout.css">
</head>
<body>

<div class="container-fluid no-gutters">
    <form>
        <fieldset class="mt-5 col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-8 offset-sm-2">
            <legend class="h4 mb-lg-5 text-center text-danger">联系人信息</legend>
            <!-- Contacts Name Start. -->
            <div class="form-group form-row">
                <label class="col-6 col-xl-2 col-form-label" for="contactName">姓名</label>
                <div class="col-12 col-xl-9">
                    <input class="form-control" id="contactName" name="contactName" type="text"
                           placeholder="请输入联系人姓名" maxlength="6" required>
                    <small class="form-text text-muted">院方会与联系人确认信息，请输入正确的联系人姓名</small>
                </div>
            </div> <!-- Contacts Name End. -->
            <!-- Contacts Telephone Start. -->
            <div class="form-group form-row">
                <label class="col-6 col-xl-2 col-form-label" for="contactTel">电话</label>
                <div class="col-xl-9">
                    <input class="form-control" id="contactTel" name="contactTel" type="tel" minlength="11"
                           placeholder="请输入联系人电话">
                    <small class="form-text text-muted">没有电话请填写下方的手机号码</small>
                </div>
            </div> <!-- Contacts Telephone End. -->
            <!-- Contacts Mobile Phone Start. -->
            <div class="form-group form-row">
                <label class="col-6 col-xl-2 col-form-label" for="contactMobile">手机</label>
                <div class="col-xl-9">
                    <input class="form-control" id="contactMobile" name="contactMobile" type="number"
                           placeholder="请输入联系人手机号码">
                    <small class="form-text text-muted">请输入正确的11位手机号码</small>
                </div>
            </div> <!-- Contacts Mobile Phone End. -->
            <!-- Contacts Address Start. -->
            <div class="form-group form-row">
                <label class="col-6 col-xl-2 col-form-label" for="contactAddress">地址</label>
                <div class="col-xl-9">
                    <textarea class="form-control" name="contactAddress" id="contactAddress" cols="30" rows="3"
                              placeholder="请输入联系人地址" required></textarea>
                    <small class="form-text text-muted">请精确到村镇</small>
                </div>
            </div> <!-- Contacts Address End. -->
            <!-- Contacts and Donor relationship Start. -->
            <div class="form-group form-row mb-3 justify-content-lg-left">
                <label class="col-xl-auto col-form-label align-items-end">填表人与捐献者关系</label>
                <div class="col-xl-7 mt-lg-2 pl-4">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" id="self" name="contactCADR" value="0" type="radio" checked>
                        <label class="custom-control-label" for="self">本人</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" id="relatives" name="contactCADR" value="1" type="radio">
                        <label class="custom-control-label" for="relatives">亲属</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" id="other" name="contactCADR" value="2" type="radio">
                        <label class="custom-control-label" for="other">其他</label>
                    </div>
                </div>
            </div> <!-- Contacts and Donor relationship End. -->
            <!-- Other Leaving A Message Content Start. -->
            <div class="form-group form-row">
                <label class="col-xl-2 col-form-label" for="contactOtherMessage">其他留言</label>
                <div class="col-xl-9">
                    <textarea class="form-control" name="contactOtherMessage" id="contactOtherMessage" cols="30" rows="3"
                              placeholder="请在这里输入你其他要告诉我们的话"></textarea>
                    <small class="form-text text-muted">没有，可以忽略。</small>
                </div>
            </div> <!-- Other Leaving A Message Content End. -->

            <!-- 转诊医生 Start. -->
            <?php if(cookie('doctor')!==null) {?>
            <div class="form-group form-row">
                <label class="col-xl-2 col-form-label" for="contactDoctor">转诊医生</label>
                <div class="col-xl-9">
                    <input class="form-control-plaintext" id="contactDoctor" name="contactDoctor" type="text" readonly value="<?php echo cookie('doctor')?>">
                    <!--<small class="form-text text-muted">这是转诊医生的姓名。</small>-->
                </div>
            </div> <!-- 转诊医生 End. -->
            <?php } ?>

            <!-- I Agree Start. -->
            <div class="form-group mt-5">
                <div class="custom-control custom-checkbox offset-xl-2">
                    <input class="custom-control-input" id="ok" type="checkbox" checked>
                    <label class="custom-control-label" for="ok">我确认上述信息准确无误</label>
                </div>
            </div> <!-- I Agree End. -->
            <!-- Next Start. -->
            <div class="form-group p-0 mb-0 col-xl-3 offset-xl-1 mt-1 mb-5 pl-xl-2">
                <a class="col-md-12 col-lg-auto ml-xl-3 ml-xl-5 btn btn-outline-danger" id="contact" data-recController="<?php echo ($rec_controller); ?>" href="javascript:void(0)">提交</a>
            </div> <!-- Next End. -->
        </fieldset>
    </form>
</div>
<!-- JQuery Library -->
<script src="/Public/script/jquery.min.js"></script>
<!-- Contact Js -->
<script src="/Public/script/contact1.js"></script>
</body>
</html>