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
   <link href="<?php echo base_url('public/css/admin-article-edit.css') ?>" rel="stylesheet">
   <script src="<?php echo base_url('public/js/admin-article-edit.js') ?>"></script>
   <script src="<?php echo base_url('public/ckeditor/ckeditor.js') ?> "></script>
</head>
<body>
   <input type="hidden" id="url_admin" value="<?php echo base_url('index.php/admin/') ?>" /> 
   <input type="hidden" id="post_parent" value="<?php echo $article_item['ID'] ?>" />
   <input type="hidden" id="post_category" value="<?php echo $article_item['post_category'] ?>" />
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
            <h3>编辑文章</h3>
            <div class="btn-group">
               <button type="button" id="btnCate" class="btn btn-default">选择分类</button>
               <button type="button" class="btn btn-default dropdown-toggle" 
                  data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">切换下拉菜单</span>
               </button>
               <ul class="dropdown-menu" role="menu">
                  <li><a id="aCate1" href="#">分类一</a></li>
                  <li><a id="aCate2" href="#">分类二</a></li>
                  <li><a id="aCate3" href="#">分类三</a></li>
               </ul>
            </div>
            <button type="button" id="btnDraft" class="btn btn-default">保存草稿</button>
            <button type="button" id="btnPreview" class="btn btn-default">预览</button>
            <button type="button" id="btnPublish" class="btn btn-primary">发布</button>
            <h3></h3>
            <div class="input-group">
               <span class="input-group-addon">标题</span>
               <input type="text" id="txtTitle" class="form-control" value="<?php echo $article_item['post_title'] ?>">
            </div>
            <h3></h3>
            <textarea name="editor1" id="editor1" rows="10" cols="80"><?php echo $article_item['post_content'] ?> </textarea>
            <script>
               CKEDITOR.replace( 'editor1' );
               CKEDITOR.config.height = 500;
            </script>
         </div> <!-- The end of main -->
      </div> <!-- The end of row -->
   </div> <!-- The end of container-fluid -->
   
   <div id="msgwrap" style="display:none">
   </div>
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" 
                  data-dismiss="modal" aria-hidden="true">
                     &times;
               </button>
               <h4 class="modal-title" id="myModalLabel">
                  提示信息
               </h4>
            </div>
            <div class="modal-body">
               发布成功！
            </div>
            <div class="modal-footer">
               <button id="btnToAdmin" type="button" class="btn btn-primary">
                  返回控制台
               </button>
            </div>
         </div><!-- /.modal-content -->
      </div><!-- /.modal -->
   </div> <!-- Mymodal -->

</body>
</html>