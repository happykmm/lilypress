<link href="<?php echo base_url('public/css/admin-edit.css') ?>" rel="stylesheet">
<script src="<?php echo base_url('public/js/admin-edit.js') ?>"></script>
<script src="<?php echo base_url('public/ckeditor/ckeditor.js') ?> "></script>
<input type="hidden" id="url_admin" value="<?php echo base_url('index.php/admin/') ?>" /> 
<input type="hidden" id="post_parent" value="<?php echo $article_item['ID'] ?>" />
<input type="hidden" id="post_category" value="<?php echo $article_item['post_category'] ?>" />
<nav id="left" class="navbar navbar-inverse" role="navigation">
   <ul class="nav nav-pills nav-stacked">
      <li id="btnArtList" class="active"><a href="<?php echo base_url('index.php/admin/artlist') ?>">所有文章</a></li>
      <li id="btnNewArt" ><a href="<?php echo base_url('index.php/admin/newart') ?>">编辑文章</a></li>
   </ul>
</nav>
<div id="rightwrap">
<div id="edit">
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
</div>
</div> <!-- the end of rightwrap -->
<div id="msgwrap">

</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
aria-labelledby="myModalLabel" aria-hidden="true">
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

