<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>爱心患者·欢迎您</title>
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css">
</head>
<body>

<div class="container-fluid">
    <?php if(cookie('doctor') !==null){ ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="/">眼库</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!--<li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>-->
            </ul>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link disabled" href="javascript:void(0)">欢迎你：</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo cookie('doctor')[name] ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">个人信息</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" id="logout" href="javascript:void(0)" data-target="<?php echo ($logout_target); ?>">退出</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <?php }?>
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4 pt-lg-5">
        <h1 class="h4 mt-5 mb-4 text-center text-danger">用户必读</h1>
        <p class="mt-5 pl-3 pr-3 text-center">无偿志愿捐献角膜的爱心人士，可填写以下详细信息。我们将在24小时
            内与您取得联系，帮助完善相关手续。
        </p>
        <p class="pl-3 pr-3 text-center mt-5">
            某些传染性疾病，梅毒、狂犬病、麻风、白喉、病毒性肝炎、脑炎、脊髓灰质炎等，恶性肿瘤以侵犯眼组织者，以及白血病、何杰金氏病等，某些眼部疾病和眼前断恶性肿瘤、视网膜母细胞瘤、病毒性角膜炎、角膜变性或疤痕、虹膜睫状体炎、化脓性眼内炎以及做过内眼手术者等，暂不能捐献。
        </p>
        <p class="text-center h5 text-danger p-4 mt-4">我们代表数百万角膜盲患者向您表示最衷心的感谢！</p>
        <div class="row mt-4 justify-content-center">
            <a class="btn btn-outline-danger col-auto" href="<?php echo ($target); ?>">填写信息</a>
        </div>
    </div>
</div>


</body>
</html>