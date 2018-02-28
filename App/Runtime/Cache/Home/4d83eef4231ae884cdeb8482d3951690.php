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
                <label class="col-6 col-form-label col-xl-2" for="donorName"><i class="text-danger">*</i>&nbsp;申请人</label>
                <div class="col-12 col-xl-9">
                    <input class="form-control" id="donorName" type="text" placeholder="请输入预约申请人姓名">
                    <small class="form-text text-muted">请输入预约者的真实姓名</small>
                </div>
            </div> <!-- Donor Name End. -->
            <!-- Donor Age Start. -->
            <div class="form-group form-row">
                <label class="col-6 col-form-label col-xl-2" for="donorAge"><i class="text-danger">*</i>&nbsp;年龄</label>
                <div class="col-12 col-xl-9">
                    <input class="form-control" id="donorAge" type="number" placeholder="请输入预约申请人的年龄" minlength="0" maxlength="500">
                    <small class="form-text text-muted">年龄以周岁计</small>
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
            <!-- Donor Job Start. -->
            <div class="form-group form-row">
                <label class="col-6 col-form-label col-xl-2" for="job">职业</label>
                <div class="col-12 col-xl-9">
                    <input class="form-control" id="job" type="text" placeholder="请输入申请人的职业" minlength="0" maxlength="500">
                    <small class="form-text text-muted">简单描述即可</small>
                </div>
            </div> <!-- Donor Job End. -->
            <!-- Donor Marriage Start. -->
            <div class="form-group form-row">
                <label class="col-form-label col-md-auto col-sm-auto col-auto col-xl-2"><i class="text-danger">*</i>&nbsp;婚否</label>
                <div class="col-8 mt-2 ml-2">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" id="noMarry" name="marriage" value="0" type="radio" checked>
                        <label class="custom-control-label" for="noMarry">未婚</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" id="married" name="marriage" value="1" type="radio">
                        <label class="custom-control-label" for="married">已婚</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" id="divorce" name="marriage" value="0" type="radio">
                        <label class="custom-control-label" for="divorce">离婚</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" id="die" name="marriage" value="0" type="radio">
                        <label class="custom-control-label" for="die">离异</label>
                    </div>
                </div>
            </div> <!-- Donor Marriage End. -->
            <!-- Donor Physiclal Status Start. -->
            <div class="form-group form-row">
                <label class="col-6 col-form-label col-xl-2" for="donorPS"><i class="text-danger">*</i>&nbsp;身体状况</label>
                <div class="col-12 col-xl-9">
                    <textarea class="form-control" name="donorPS" id="donorPS" cols="30" rows="3" placeholder="请输入申请人目前的身体情况"></textarea>
                    <small class="form-text text-muted">请描述你现在的身体情况</small>
                </div>
            </div> <!-- Donor Physiclal Status End. -->
            <!-- Donor Medical History Start. -->
            <div class="form-group form-row">
                <label class="col-6 col-form-label col-xl-2" for="donorMH">疾病史</label>
                <div class="col-12 col-xl-9">
                    <textarea class="form-control" name="donorMH" id="donorMH" cols="30" rows="3" placeholder="如果申请人有疾病史，请在这里输入。如若没有，则可以忽略"></textarea>
                    <small class="form-text text-muted">有，请详述。没有，可忽略。</small>
                </div>
            </div> <!-- Donor Medical History End. -->
            <!-- Eye Surgery Start. -->
            <div class="form-group form-row">
                <label class="col-6 col-form-label col-xl-2" for="eyeSurgery">眼部手术史</label>
                <div class="col-12 col-xl-9">
                    <textarea class="form-control" name="donorMH" id="eyeSurgery" cols="30" rows="3" placeholder="如果申请者眼部曾有过手术，请在这里输入。如若没有，则可以忽略"></textarea>
                    <small class="form-text text-muted">有，请详述。没有，可忽略。</small>
                </div>
            </div> <!-- Eye Surgery End. -->
            <!-- Drug Allergy Start. -->
            <div class="form-group form-row">
                <label class="col-6 col-form-label col-xl-2" for="drugAllergy">药物过敏史</label>
                <div class="col-12 col-xl-9">
                    <textarea class="form-control" name="donorMH" id="drugAllergy" cols="30" rows="3" placeholder="如果申请者对药物有过敏现象，请在这里详述。如若没有，则可以忽略"></textarea>
                    <small class="form-text text-muted">有，请详述。没有，可忽略。</small>
                </div>
            </div> <!-- Drug Allergy End. -->
            <!-- Complication Start. -->
            <div class="form-group form-row">
                <label class="col-6 col-form-label col-xl-2" for="complication">合并症</label>
                <div class="col-12 col-xl-9">
                    <textarea class="form-control" name="donorMH" id="complication" cols="30" rows="3" placeholder="如果申请者有合并症现象，请在这里详述。如若没有，则可以忽略"></textarea>
                    <small class="form-text text-muted">有，请详述。没有，可忽略。</small>
                </div>
            </div> <!-- Complication End. -->
            <!-- Diagnosis Start. -->
            <div class="form-group form-row">
                <label class="col-6 col-form-label col-xl-2" for="diagnosis">当地诊断结果</label>
                <div class="col-12 col-xl-9">
                    <textarea class="form-control" name="donorMH" id="diagnosis" cols="30" rows="3" placeholder="请将当地的诊断结果，在这里简述"></textarea>
                    <small class="form-text text-muted">有，请详述。没有，可忽略。</small>
                </div>
            </div> <!-- Diagnosis End. -->

            <!-- Next Start. -->
            <div class="form-group col-12 mt-5 mb-5 p-0">
                <a class="col-12 col-xl-auto offset-xl-2 btn btn-outline-danger" href="contacts.html">下一步</a>
            </div> <!-- Next End. -->
        </fieldset>
    </form>
</div> <!-- container fluid End. -->
</body>
</html>