<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo ($page_title); ?></title>
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/css/layout.css">
</head>
<body>
<div class="container-fluid no-gutters">
    <form>
        <fieldset class="mt-5 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 col-sm-8 offset-sm-2">
            <legend class="h4 text-center text-danger"><?php echo ($form_title); ?></legend>
            <div class="text-center text-danger h6 mb-lg-5">（带*号为必填项）</div>
            <!-- Donor Name Start. -->
            <div class="form-group form-row">
                <label class="col-6 col-form-label col-xl-2" for="donorName"><i class="text-danger">*</i>&nbsp;姓名</label>
                <div class="col-12 col-xl-9">
                    <input class="form-control" id="donorName" name="donorName" type="text" placeholder="请输入捐献者姓名" maxlength="6" required>
                    <small class="form-text text-muted">请输入正确的姓名，姓名影响到捐献的唯一性</small>
                </div>
            </div> <!-- Donor Name End. -->
            <!-- Donor Age Start. -->
            <div class="form-group form-row">
                <label class="col-6 col-form-label col-xl-2" for="donorAge"><i class="text-danger">*</i>&nbsp;年龄</label>
                <div class="col-12 col-xl-9">
                    <input class="form-control" id="donorAge" name="donorAge" type="number" placeholder="请输入捐献者年龄" min="1" max="300" required>
                    <small class="form-text text-muted">年龄应是数字格式</small>
                </div>
            </div> <!-- Donor Age End. -->
            <!-- Donor Sex Start. -->
            <div class="form-group form-row justify-content-md-left justify-content-left mb-3">
                <label class="col-form-label col-md-auto col-sm-auto col-auto col-xl-2"><i class="text-danger">*</i>&nbsp;性别</label>
                <div class="col-8 mt-2 ml-2">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" id="boy" name="donorSex" value="1" type="radio" checked>
                        <label class="custom-control-label" for="boy">男</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" id="girl" name="donorSex" value="0" type="radio">
                        <label class="custom-control-label" for="girl">女</label>
                    </div>
                </div>
            </div> <!-- Donor Sex End. -->
            <!-- Donor Physiclal Status Start. -->
            <div class="form-group form-row">
                <label class="col-6 col-form-label col-xl-2" for="donorPS"><i class="text-danger">*</i>&nbsp;身体状况</label>
                <div class="col-12 col-xl-9">
                    <textarea class="form-control" name="donorPS" id="donorPS" cols="30" rows="3" placeholder="请输入捐献者目前的身体状况" required></textarea>
                    <small class="form-text text-muted">请描述你现在的身体情况</small>
                </div>
            </div> <!-- Donor Physiclal Status End. -->
            <!-- Donor Medical History Start. -->
            <div class="form-group form-row">
                <label class="col-6 col-form-label col-xl-2" for="donorMH">疾病史</label>
                <div class="col-12 col-xl-9">
                    <textarea class="form-control" name="donorMH" id="donorMH" cols="30" rows="3" placeholder="如有捐献者有疾病史，请在这里输入。如若没有，则可以忽略"></textarea>
                    <small class="form-text text-muted">有，请详述。没有，可忽略。</small>
                </div>
            </div> <!-- Donor Medical History End. -->

            <!-- Next Start. -->
            <div class="form-group col-12 mt-5 mb-5 p-0">
                <a class="col-12 col-xl-auto offset-xl-2 btn btn-outline-danger" id="donor" data-recController="<?php echo ($rec_controller); ?>" href="javascript:void(0)">下一步</a>
            </div> <!-- Next End. -->
        </fieldset>
    </form>
</div> <!-- container fluid End. -->

<!-- JQuery Library -->
<script src="/Public/script/jquery.min.js"></script>
<!-- Donor Js -->
<script src="/Public/script/donor.js"></script>
</body>
</html>