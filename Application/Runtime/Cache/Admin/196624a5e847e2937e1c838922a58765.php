<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>异清轩博客管理系统</title>
<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ADMIN ?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ADMIN ?>css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ADMIN ?>css/font-awesome.min.css">
<link rel="apple-touch-icon-precomposed" href="<?php echo PUBLIC_ADMIN ?>images/icon/icon.png">
<link rel="shortcut icon" href="<?php echo PUBLIC_ADMIN ?>images/icon/favicon.ico">
<script src="<?php echo PUBLIC_ADMIN ?>js/jquery-2.1.4.min.js"></script>
<!--[if gte IE 9]>
  <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="js/html5shiv.min.js" type="text/javascript"></script>
  <script src="js/respond.min.js" type="text/javascript"></script>
  <script src="js/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->
<!--[if lt IE 9]>
  <script>window.location.href='upgrade-browser.html';</script>
<![endif]-->
</head>
<header>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">切换导航</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <a class="navbar-brand" href="http://localhost/blog/index.php/admin/index/index">YlsatCMS</a> </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="http://localhost/blog/index.php/Home/index/index">网站首页</a></li>
                <li><a href="">消息 <span class="badge">1</span></a></li>
                <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">admin <span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-menu-left">
                    <li><a title="查看或修改个人信息" data-toggle="modal" data-target="#seeUserInfo">个人信息</a></li>
                    <li><a title="查看您的登录记录" data-toggle="modal" data-target="#seeUserLoginlog">登录记录</a></li>
                  </ul>
                </li>
                <li><a href="/blog/index.php/Admin/user/login" onClick="if(!confirm('是否确认退出？'))return false;">退出登录</a></li>
                <li><a data-toggle="modal" data-target="#WeChat">帮助</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <script src="<?php echo PUBLIC_ADMIN ?>js/bootstrap.min.js"></script> 
      <script src="<?php echo PUBLIC_ADMIN ?>js/admin-scripts.js"></script>
<!doctype html>
<html lang="zh-CN">

<head>
  <meta charset="utf-8">
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>文章 - 异清轩博客管理系统</title>
  <link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ADMIN ?>css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ADMIN ?>css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ADMIN ?>css/font-awesome.min.css">
  <link rel="apple-touch-icon-precomposed" href="<?php echo PUBLIC_ADMIN ?>images/icon/icon.png">
  <link rel="shortcut icon" href="<?php echo PUBLIC_ADMIN ?>images/icon/favicon.ico">
  <script src="<?php echo PUBLIC_ADMIN ?>js/jquery-2.1.4.min.js"></script>
</head>
<body class="user-select">
  <section class="container-fluid">
    
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" class="main">
        <h1 class="page-header">操作</h1>
        <ol class="breadcrumb">
            <li>
            <form action="/blog/index.php/Admin/Article/article" method="post" class="navbar-form navbar-right" role="search">
                <div class="input-group">
                  <input type="text" class="form-control" autocomplete="off" placeholder="标题搜索" maxlength="15" name="para">
                  <span class="input-group-btn">
                  <button class="btn btn-default" type="submit">搜索</button>
                  </span> </div>
            </form>
         </li>
        </ol>
        <h1 class="page-header">管理 <span class="badge">3</span></h1>

        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th><span class="glyphicon glyphicon-th-large"></span> <span class="visible-lg">选择</span></th>
                <th><span class="glyphicon glyphicon-file"></span> <span class="visible-lg">标题</span></th>
                <th><span class="glyphicon glyphicon-list"></span> <span class="visible-lg">栏目</span></th>
                <th class="hidden-sm"><span class="glyphicon glyphicon-tag"></span> <span class="visible-lg">标签</span>
                <th class="hidden-sm"><span class="glyphicon glyphicon-comment"></span><span class="visible-lg">blog</span>
                </th>
                <th class="hidden-sm"><span class="glyphicon glyphicon-comment"></span> <span
                    class="visible-lg">评论</span></th>
                <th><span class="glyphicon glyphicon-time"></span> <span class="visible-lg">日期</span></th>
                <th><span class="glyphicon glyphicon-pencil"></span> <span class="visible-lg">操作</span></th>
              </tr>
            </thead>
            <tbody>
              <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                  <td><input type="checkbox" class="input-control" name="checkbox[]" value="" /></td>
                  <td class="article-title"><?php echo ($vo["title"]); ?></td>
                  <td><?php echo ($vo["column"]); ?></td>
                  <td class="hidden-sm"><?php echo ($vo["label"]); ?></td>
                  <td><a href="#">查看全文..</a></td>
                  <td class="hidden-sm"><a><?php echo ($vo["comments"]); ?></a></td>
                  <td><?php echo ($vo["datetime"]); ?></td>
                  <td class="last_td">
                    <a href="/blog/index.php/Admin/Article/update_article/id/<?php echo ($vo["id"]); ?>">修改</a>
                    <a href="/blog/index.php/Admin/Article/delete_article/id/<?php echo ($vo["id"]); ?>">删除</a>
                  </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
          </table>
        </div>
        <footer class="message_footer">
          <nav>
            <div class="btn-toolbar operation" role="toolbar">
              <div class="btn-group" role="group"> <a class="btn btn-default" onClick="select()">全选</a> <a
                  class="btn btn-default" onClick="reverse()">反选</a> <a class="btn btn-default"
                  onClick="noselect()">不选</a> </div>
              <div class="btn-group" role="group">
                <button type="submit" class="btn btn-default" data-toggle="tooltip" data-placement="bottom"
                  title="删除全部选中" name="checkbox_delete">删除</button>
              </div>
              <div class="btn-group" role="group">
                  <button type="submit" class="btn btn-default" data-toggle="tooltip" data-placement="bottom"
                  ><a href="/blog/index.php/Admin/Article/add_article">增加文章</a></button>
                  
                </div>
            </div>
           
            
            <ul class="pagination pagenav">
              <li class="active">
                <?php echo ($page); ?>
              </li>
            </ul>
          </nav>
        </footer>
    </div>
    </div>
  </section>
  <!--提示模态框-->
  <div class="modal fade user-select" id="areDeveloping" tabindex="-1" role="dialog"
    aria-labelledby="areDevelopingModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="areDevelopingModalLabel" style="cursor:default;">该功能正在日以继夜的开发中…</h4>
        </div>
        <div class="modal-body"> <img src="<?php echo PUBLIC_ADMIN ?>images/baoman/baoman_01.gif" alt="深思熟虑" />
          <p style="padding:15px 15px 15px 100px; position:absolute; top:15px; cursor:default;">
            很抱歉，程序猿正在日以继夜的开发此功能，本程序将会在以后的版本中持续完善！</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">朕已阅</button>
        </div>
      </div>
    </div>
  </div>
  <!--右键菜单列表-->
  <div id="rightClickMenu">
    <ul class="list-group rightClickMenuList">
      <li class="list-group-item disabled">欢迎访问异清轩博客</li>
      <li class="list-group-item"><span>IP：</span>172.16.10.129</li>
      <li class="list-group-item"><span>地址：</span>河南省郑州市</li>
      <li class="list-group-item"><span>系统：</span>Windows10 </li>
      <li class="list-group-item"><span>浏览器：</span>Chrome47</li>
    </ul>
  </div>
  <script src="<?php echo PUBLIC_ADMIN ?>js/bootstrap.min.js"></script>
  <script src="<?php echo PUBLIC_ADMIN ?>js/admin-scripts.js"></script>
  <script>
    $(function () {
    $(".last_td a:last-child").click(function () {
      console.log("<?php echo ($vo["id"]); ?>");
      var aa = confirm("确认删除吗");
      if (aa == false) {
        $(this).attr("href", "");
      }else{
        alert("删除成功");
      }
    })
  });
  </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon-precomposed" href="<?php echo PUBLIC_ADMIN ?>images/icon/icon.png">
  <link rel="shortcut icon" href="<?php echo PUBLIC_ADMIN ?>images/icon/favicon.ico">
  <script src="<?php echo PUBLIC_ADMIN ?>js/jquery-2.1.4.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ADMIN ?>css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ADMIN ?>css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_ADMIN ?>css/font-awesome.min.css">
  </head>

<body>
        <div class="row">
                <aside class="col-sm-3 col-md-2 col-lg-2 sidebar">
                  
                  <ul class="nav nav-sidebar sl ">
                    <li><a href="/blog/index.php/Admin/index/index">报告</a></li>
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
                        <li><a href="/blog/index.php/Admin/user/manage_admin">管理管理员</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/blog/index.php/Admin/user/loginlog">管理登录日志</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-toggle" id="settingMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">设置</a>
                      <ul class="dropdown-menu" aria-labelledby="settingMenu">
                        <li><a href="/blog/index.php/Admin/index/setting">基本设置</a></li>
                        <li><a href="/blog/index.php/Admin/index/readset">阅读设置</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a data-toggle="modal" data-target="#areDeveloping">安全配置</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="disabled"><a>扩展菜单</a></li>
                      </ul>
                    </li>
                  </ul>
                </aside>
            </div>
<script src="<?php echo PUBLIC_ADMIN ?>js/bootstrap.min.js"></script> 
<script src="<?php echo PUBLIC_ADMIN ?>js/admin-scripts.js"></script>
<!-- </body>
</html> -->
<!-- 'TMPL_LAYOUT_ITEM'      =>  '{__REPLACE__}' -->