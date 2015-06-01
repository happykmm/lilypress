<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
   <title>lilypress 主页</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <base href="{""|base_url}">
   <link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="public/css/front-article.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
         <div class="navbar-header"> 
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </button>
            <a class="navbar-brand" href="#">lilypress 主页</a>
         </div>
         <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
               <li><a href="index.php/front/home">主页</a></li>
               <li><a href="index.php/admin/article/list/1">控制台</a></li>
               <li><a href="#">Profile</a></li>
               <li><a href="#">Help</a></li>
            </ul>
            <form class="navbar-form navbar-right">
               <input type="text" class="form-control" placeholder="Search...">
            </form>
         </div>
      </div>
   	</nav>
	<div id="pgwrap">
		<div id="leftwrap">
		</div>
		<div id="rightbg">
		</div>
		<div id="rightwrap">
			<div class="article-wrap">
				<div class="article-title">  {$data.article_item.post_title}</div>
				<div class="article-content">{$data.article_item.post_content}</div>
				<ul class="article-footer">
					<li><span class="glyphicon glyphicon-user"></span></li>
					<li class="article-author"> {$data.article_item.post_author}</li>
					<li><span class="glyphicon glyphicon-calendar"></span> </li>
					<li class="article-date"> {$data.article_item.post_date}</li>
				</ul>
			</div>
			<div class="right-footer">
				<div class="site-info">
					<a href="javascript:void()">自豪地采用lilypress</a>
				</div>
			</div>	
		</div><!--The end of rightwrap-->
	</div><!--The end of pgwrap-->
	<script src="public/js/jquery-2.1.1.min.js"></script>
    <script src="public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>