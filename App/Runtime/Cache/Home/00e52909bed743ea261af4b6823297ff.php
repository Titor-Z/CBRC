<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>红十字会眼角膜库</title>
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/css/custom.css">
</head>
<body>


<div class="container">
    <?php if(cookie('doctor') !==null){ ?>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link disabled" href="javascript:void(0)">欢迎你：<?php echo cookie('doctor')[name] ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="logout" href="javascript:void(0)" data-target="<?php echo ($logout_target); ?>">退出</a>
        </li>
    </ul>
    <?php }?>

    <div class="block row">
        <!-- 患者入口  Start. -->
        <div class="border col-8 offset-2 mt-5 mb-5 col-sm-4 offset-sm-1 col-md-6 offset-md-3 col-lg-4 offset-lg-1">
            <a class="btn btn-info" href="<?php echo ($left_target); ?>"><?php echo ($left); ?></a>
        </div> <!-- 患者入口  End. -->
        <!-- 医生入口  Start. -->
        <div class="border col-8 offset-2 mt-5 col-sm-4 col-md-6 offset-md-3 col-lg-4 offset-lg-2">
            <a class="btn btn-light" href="<?php echo ($right_target); ?>"><?php echo ($right); ?></a>
        </div> <!-- 医生入口  End. -->
    </div>
    <footer class="text-center mb-5 fixed-bottom">&copy;&nbsp;邯郸爱眼医院</footer>
</div>

<script src="/Public/script/jquery.min.js"></script>
<script src="/Public/script/doctor.js"></script>
</body>
</html>