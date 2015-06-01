<?php /* Smarty version 2.6.28, created on 2015-02-28 14:00:05
         compiled from front/home.php */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'base_url', 'front/home.php', 7, false),array('modifier', 'substr', 'front/home.php', 86, false),)), $this); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<title>lilypress 主页</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<base href="<?php echo ((is_array($_tmp="")) ? $this->_run_mod_handler('base_url', true, $_tmp) : base_url($_tmp)); ?>
">
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
				<?php unset($this->_sections['artitem']);
$this->_sections['artitem']['name'] = 'artitem';
$this->_sections['artitem']['loop'] = is_array($_loop=$this->_tpl_vars['data']['article']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['artitem']['show'] = true;
$this->_sections['artitem']['max'] = $this->_sections['artitem']['loop'];
$this->_sections['artitem']['step'] = 1;
$this->_sections['artitem']['start'] = $this->_sections['artitem']['step'] > 0 ? 0 : $this->_sections['artitem']['loop']-1;
if ($this->_sections['artitem']['show']) {
    $this->_sections['artitem']['total'] = $this->_sections['artitem']['loop'];
    if ($this->_sections['artitem']['total'] == 0)
        $this->_sections['artitem']['show'] = false;
} else
    $this->_sections['artitem']['total'] = 0;
if ($this->_sections['artitem']['show']):

            for ($this->_sections['artitem']['index'] = $this->_sections['artitem']['start'], $this->_sections['artitem']['iteration'] = 1;
                 $this->_sections['artitem']['iteration'] <= $this->_sections['artitem']['total'];
                 $this->_sections['artitem']['index'] += $this->_sections['artitem']['step'], $this->_sections['artitem']['iteration']++):
$this->_sections['artitem']['rownum'] = $this->_sections['artitem']['iteration'];
$this->_sections['artitem']['index_prev'] = $this->_sections['artitem']['index'] - $this->_sections['artitem']['step'];
$this->_sections['artitem']['index_next'] = $this->_sections['artitem']['index'] + $this->_sections['artitem']['step'];
$this->_sections['artitem']['first']      = ($this->_sections['artitem']['iteration'] == 1);
$this->_sections['artitem']['last']       = ($this->_sections['artitem']['iteration'] == $this->_sections['artitem']['total']);
?>
				<div class="article-wrap">
					<a href="index.php/front/article/<?php echo $this->_tpl_vars['data']['article'][$this->_sections['artitem']['index']]['ID']; ?>
">
					<div class="article-title">  <?php echo $this->_tpl_vars['data']['article'][$this->_sections['artitem']['index']]['post_title']; ?>
</div></a>
					<div class="article-author"> <?php echo $this->_tpl_vars['data']['article'][$this->_sections['artitem']['index']]['post_author']; ?>
</div>
					<div class="article-date">   <?php echo $this->_tpl_vars['data']['article'][$this->_sections['artitem']['index']]['post_modified']; ?>
</div>
					<div class="article-content"><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['article'][$this->_sections['artitem']['index']]['post_content'])) ? $this->_run_mod_handler('substr', true, $_tmp, 1, 800) : substr($_tmp, 1, 800)); ?>
</div>
				</div>
				<?php endfor; endif; ?>
			</div>
			<div class="col-xs-12">
			</div>
		</div> <!-- The end of row -->
	</div> <!-- The end of container-fluid -->
	<script src="public/js/jquery-2.1.1.min.js"></script>
	<script src="public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
