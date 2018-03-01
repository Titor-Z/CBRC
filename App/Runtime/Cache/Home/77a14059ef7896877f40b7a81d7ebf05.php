<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>申请结果</title>
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css">
</head>
<body class="pt-md-5 pt-lg-5">

<div class="container-fluid mt-5 pt-5 pt-sm-1 pt-md-5 pt-lg-5">
    <div class="col-lg-4 offset-lg-4 mt-5 text-center">
        <h1 class="h4 text-danger mt-5 mb-4"><?php echo ($title); ?></h1>
        <p class="text-muted"><?php echo ($info); ?></p>
        <a class="btn btn-outline-danger mt-3" href="javascript:window.location.href='<?php echo ($target); ?>'">关闭</a>
    </div>
</div>

</body>
</html>