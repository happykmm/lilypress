<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
   <title>lilypress 控制台</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="<?php echo base_url('public/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
   <script src="<?php echo base_url('public/js/jquery-2.1.1.min.js') ?>"></script>
   <script src="<?php echo base_url('public/bootstrap/js/bootstrap.min.js') ?>"></script>
   <link href="<?php echo base_url('public/css/admin-article.css') ?>" rel="stylesheet">
   <script src="<?php echo base_url('public/js/admin-article-list.js') ?>"></script>
</head>
<body>
   <input type="hidden" id="url_admin" value="<?php echo base_url('index.php/admin') ?>"> 
   <input type="hidden" id="status" value="<?php echo $status ?>" />
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
         <div class="navbar-header"> 
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </button>
            <a class="navbar-brand" href="#">lilypress 控制台</a>
         </div>
         <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
               <li><a href="<?php echo base_url('index.php/front/home') ?>">主页</a></li>
               <li><a href="<?php echo base_url('index.php/admin/article/list/1') ?>">控制台</a></li>
               <li><a href="#">Profile</a></li>
               <li><a href="#">Help</a></li>
            </ul>
            <form class="navbar-form navbar-right">
               <input type="text" class="form-control" placeholder="Search...">
            </form>
         </div>
      </div>
   </nav>

   <div class="container-fluid">
      <div class="row">
         <div class="col-xs-2 sidebar">
            <ul class="nav nav-sidebar">
               <li><a href="<?php echo base_url('index.php/admin/console') ?>">
                  <span class="glyphicon glyphicon-globe"></span> 
                  <span class="hidden-xs">&nbsp;控制台 </span>
               </a></li>
               <li><a class="active" href="<?php echo base_url('index.php/admin/article/list/1') ?>">
                  <span class="glyphicon glyphicon-list-alt"></span>
                  <span class="hidden-xs">&nbsp;文章 </span>
                  </a>
                  <a class="hidden-xs" id="btnArtList" href="<?php echo base_url('index.php/admin/article/list/1') ?>"><strong>所有文章</strong></a>
                  <a class="hidden-xs" id="btnNewArt" href="<?php echo base_url('index.php/admin/article/new') ?>">新建文章</a>
                  <a class="hidden-xs" href="#">分类目录</a>
                  <a class="hidden-xs" href="#">标签</a>
               </li>
               <li><a href="<?php echo base_url('index.php/admin/media') ?>">
                  <span class="glyphicon glyphicon-picture"></span>
                  <span class="hidden-xs">&nbsp;多媒体 </span>
               </a></li>
               <li><a href="<?php echo base_url('index.php/admin/page') ?>">
                  <span class="glyphicon glyphicon-file"></span>
                  <span class="hidden-xs">&nbsp;页面 </span>
               </a></li>
               <li><a href="<?php echo base_url('index.php/admin/comment') ?>">
                  <span class="glyphicon glyphicon-comment"></span>
                  <span class="hidden-xs">&nbsp;评论 </span>
               </a></li>
               <li><a href="<?php echo base_url('index.php/admin/user') ?>">
                  <span class="glyphicon glyphicon-user"></span>
                  <span class="hidden-xs">&nbsp;用户 </span>
               </a></li>
               <li><a href="<?php echo base_url('index.php/admin/theme') ?>">
                  <span class="glyphicon glyphicon-eye-open"></span>
                  <span class="hidden-xs">&nbsp;外观 </span>
               </a></li>
               <li><a href="<?php echo base_url('index.php/admin/tool') ?>">
                  <span class="glyphicon glyphicon-wrench"></span>
                  <span class="hidden-xs">&nbsp;工具 </span>
               </a></li>
               <li><a href="<?php echo base_url('index.php/admin/setting') ?>">
                  <span class="glyphicon glyphicon-cog"></span>
                  <span class="hidden-xs">&nbsp;设置 </span>
               </a></li>
            </ul>
         </div>
         <div class="col-xs-10 col-xs-offset-2 main">
            <h3>文章列表</h3>
            <ol class="breadcrumb">
               <li><?php if($status==0) echo "全部"; 
                        else echo "<a href='".base_url('index.php/admin/article/list/0')."'>全部</a>" ?></li>
               <li><?php if($status==1) echo "已发布"; 
                        else echo "<a href='".base_url('index.php/admin/article/list/1')."'>已发布</a>" ?></li>
               <li><?php if($status==2) echo "草稿"; 
                        else echo "<a href='".base_url('index.php/admin/article/list/2')."'>草稿</a>" ?></li>
               <li><?php if($status==-1) echo "回收站"; 
                        else echo "<a href='".base_url('index.php/admin/article/list/-1')."'>回收站</a>" ?></li>
            </ol>
            <div class="btn-group">
               <button type="button" class="btn btn-default">批量操作</button>
               <button type="button" class="btn btn-default dropdown-toggle" 
                  data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">切换下拉菜单</span>
               </button>
               <ul class="dropdown-menu" role="menu">
                  <li><a href="#">删除</a></li>
               </ul>
            </div>
            <div class="btn-group">
               <button type="button" class="btn btn-default">所有分类</button>
               <button type="button" class="btn btn-default dropdown-toggle" 
                  data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">切换下拉菜单</span>
               </button>
               <ul class="dropdown-menu" role="menu">
                  <li><a href="#">分类一</a></li>
                  <li><a href="#">分类二</a></li>
                  <li><a href="#">分类三</a></li>
               </ul>
            </div>
            <div class="btn-group">
               <button type="button" class="btn btn-default">排序</button>
               <button type="button" class="btn btn-default dropdown-toggle" 
                  data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">切换下拉菜单</span>
               </button>
               <ul class="dropdown-menu" role="menu">
                  <li><a href="#">时间倒序</a></li>
                  <li><a href="#">时间顺序</a></li>
                  <li><a href="#">标题顺序</a></li>
                  <li><a href="#">标题倒序</a></li>
                  <li><a href="#">作者顺序</a></li>
                  <li><a href="#">作者倒序</a></li>
               </ul>
            </div>
            <h3> </h3>
            <table class="table table-striped ">
               <thead>
                  <tr>
                     <th><label><input type="checkbox" value=""></label></th>
                     <th>标题</th>
                     <th>分类</th>
                     <th>作者</th>
                     <th>修改时间</th>
                     <th>操作</th>
                  </tr>
               </thead>
               <tbody>
                  <?php foreach ($article as $article_item): ?>
                  <tr>
                     <td><label><input type="checkbox" value=""></label></td>
                     <td> <?php echo $article_item['post_title'] ?> </td>
                     <td> <?php echo $article_item['post_category'] ?></td>
                     <td> <?php echo $article_item['post_author'] ?></td>
                     <td> <?php echo $article_item['post_modified'] ?></td>
                     <td> <?php if ($status == -1)
            echo "<a href='#' onclick='article_retrieve(".$article_item['ID'].")'>恢复</a>";
         else {
            echo "<a href='".base_url('index.php/admin/article/edit/'.$article_item['ID'])."'>编辑</a>";
            echo " | ";
            echo "<a href='#' onclick='article_delete(".$article_item['ID'].")'>删除</a>"; 
         }  ?>
                     </td> 
                  </tr>
                  <?php endforeach ?>

               </tbody>
            </table>
         </div> <!-- The end of main -->
      </div> <!-- The end of row -->
   </div> <!-- The end of container-fluid -->
</body>
</html>
