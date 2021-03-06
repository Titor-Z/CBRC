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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/Public/script/doctor.js"></script>
</body>
</html>