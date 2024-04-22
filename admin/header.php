<?php

if (!defined('__TYPECHO_ADMIN__')) {
    exit;
}

$header = '<link rel="stylesheet" href="' . Typecho_Common::url('normalize.css?v=' . $options->version, $options->adminStaticUrl('css')) . '">
<link rel="stylesheet" href="' . Typecho_Common::url('grid.css?v=' . $options->version, $options->adminStaticUrl('css')) . '">
<link rel="stylesheet" href="' . Typecho_Common::url('style.css?v=' . $options->version, $options->adminStaticUrl('css')) . '">
<!--[if lt IE 9]>
<script src="' . Typecho_Common::url('html5shiv.js?v=' . $options->version, $options->adminStaticUrl('js')) . '"></script>
<script src="' . Typecho_Common::url('respond.js?v=' . $options->version, $options->adminStaticUrl('js')) . '"></script>
<![endif]-->';

/** 注册一个初始化插件 */
$header = Typecho_Plugin::factory('admin/header.php')->header($header);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php $options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%220.9em%22  font-size=%2290%22>🍃</text></svg>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php _e('%s - %s', $menu->title, $options->title); ?></title>
    <meta name="robots" content="noindex, nofollow">
    <?php echo $header; ?>
    <!-- Argon CSS -->
    <script src="./ricken/js/jquery.min.js"></script>
    <!-- Favicon -->
        <link rel="stylesheet" href="./ricken/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="./ricken/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <link rel="stylesheet" href="./ricken/css/fullcalendar.min.css">
    <link rel="stylesheet" href="./ricken/css/sweetalert2.min.css">
    <link rel="stylesheet" href="./ricken/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="./ricken/css/argon.min.css?v=1.0.0" type="text/css">
    <link rel="stylesheet" href="./ricken/css/admin-css.css" type="text/css">

    <style>
        .btn{
            display: inline;
            border-radius: 2px !important;
        }
        .btn.btn-sm {
            padding: 4px 15px;
        }
        .btn.btn-danger {
            color: #ffcccc;
        }
        .btn.btn-danger:hover {
            color: #ffffff;
        }
        
        /*定义滚动条高宽及背景 高宽分别对应横竖滚动条的尺寸*/ 
        ::-webkit-scrollbar {
            width: 8px;
            height: 6px
        }
        /*定义滚动条轨道*/ 
        ::-webkit-scrollbar-track {
            background-color: transparent;
            -webkit-border-radius: 2em;
            -moz-border-radius: 2em;
            border-radius: 2em
        }
        ::-webkit-scrollbar-track-piece{
            background-color: #f8f9fe;
        }
        /*定义滑块 内阴影+圆角*/ 
        ::-webkit-scrollbar-thumb {
            background-color: #FFB6C1;
            background-image: -webkit-linear-gradient(45deg,rgba(255,255,255,.4) 100%,transparent 100%,transparent 50%,rgba(255,255,255,.4) 50%,rgba(255,255,255,.4) 75%,transparent 75%,transparent);
            -webkit-border-radius: 2em;
            -moz-border-radius: 2em;
            border-radius: 2em
        }
    </style>
</head>
<body>