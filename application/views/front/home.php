<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>lilypress 主页</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<base href="{""|base_url}">
	<link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="public/css/front-home.css" rel="stylesheet">
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
   	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="public/img/img1.jpg" alt="..." >
				<div class="carousel-caption">
					<h3>eason</h3>
					<p>你当我是浮夸吗，夸张只因我很怕</p>
				</div>
			</div>
			<div class="item">
				<img src="public/img/img2.jpg" alt="...">
				<div class="carousel-caption">
					<h3>五月天</h3>
					<p>那一年天空很高，风很清澈</p>
				</div>
			</div>
			<div class="item">
				<img src="public/img/img3.jpg" alt="...">
				<div class="carousel-caption">
					<h3>笑忘歌</h3>
					<p>只愿只要平凡快乐，谁说这样不伟大呢</p>
				</div>
			</div>
		</div>
		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-7 col-xs-offset-1">
				{section name=artitem loop=$data.article}
				<div class="article-wrap">
					<a href="index.php/front/article/{$data.article[artitem].ID}">
					<div class="article-title">  {$data.article[artitem].post_title}</div></a>
					<div class="article-author"> {$data.article[artitem].post_author}</div>
					<div class="article-date">   {$data.article[artitem].post_modified}</div>
					<div class="article-content">{$data.article[artitem].post_content|substr:1:800}</div>
				</div>
				{/section}
			</div>
			<div class="col-xs-12">
			</div>
		</div> <!-- The end of row -->
	</div> <!-- The end of container-fluid -->
	<script src="public/js/jquery-2.1.1.min.js"></script>
	<script src="public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

