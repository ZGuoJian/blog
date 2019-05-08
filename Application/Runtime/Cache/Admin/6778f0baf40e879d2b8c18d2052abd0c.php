<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ADMIN ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ADMIN ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ADMIN ?>css/font-awesome.min.css">
    <link rel="apple-touch-icon-precomposed" href="<?php echo PUBLIC_ADMIN ?>images/icon/icon.png">
    <link rel="shortcut icon" href="<?php echo PUBLIC_ADMIN ?>images/icon/favicon.ico">
    <script src="<?php echo PUBLIC_ADMIN ?>js/jquery-2.1.4.min.js"></script>
</head>
<body>
        <div class="row">
                <aside class="col-sm-3 col-md-2 col-lg-2 sidebar">
                  <ul class="nav nav-sidebar">
                    <li class="active"><a href="">报告</a></li>
                  </ul>
                  <ul class="nav nav-sidebar">
                    <li><a href="/blog/index.php/Admin/article/article">文章</a></li>
                    <li><a href="/blog/index.php/Admin/article/notice">公告</a></li>
                    <li><a href="/blog/index.php/Admin/article/comment">评论</a></li>
                    <li><a data-toggle="tooltip" data-placement="bottom" title="网站暂无留言功能">留言</a></li>
                  </ul>
                  <ul class="nav nav-sidebar">
                    <li><a href="/blog/index.php/Admin/article/category">栏目</a></li>
                    <li><a class="dropdown-toggle" id="otherMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">其他</a>
                      <ul class="dropdown-menu" aria-labelledby="otherMenu">
                        <li><a href="/blog/index.php/Admin/article/flink">友情链接</a></li>
                        <li><a data-toggle="modal" data-target="#areDeveloping">访问记录</a></li>
                      </ul>
                    </li>
                  </ul>
                  <ul class="nav nav-sidebar">
                    <li><a class="dropdown-toggle" id="userMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">用户</a>
                      <ul class="dropdown-menu" aria-labelledby="userMenu">
                        <li><a data-toggle="modal" data-target="#areDeveloping">管理用户组</a></li>
                        <li><a href="/blog/index.php/Admin/user/manage_user">管理用户</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/blog/index.php/Admin/user/loginlog">管理登录日志</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-toggle" id="settingMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">设置</a>
                      <ul class="dropdown-menu" aria-labelledby="settingMenu">
                        <li><a href="/blog/index.php/Admin/Index/index/setting">基本设置</a></li>
                        <li><a href="/blog/index.php/Admin/Index/index/readset">阅读设置</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a data-toggle="modal" data-target="#areDeveloping">安全配置</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="disabled"><a>扩展菜单</a></li>
                      </ul>
                    </li>
                  </ul>
                </aside>
<script src="<?php echo PUBLIC_ADMIN ?>js/bootstrap.min.js"></script> 
<script src="<?php echo PUBLIC_ADMIN ?>js/admin-scripts.js"></script>
</body>
</html>