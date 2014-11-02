<link href="<?php echo base_url('public/css/front-home.css') ?>" rel="stylesheet">
<?php foreach ($article as $article_item): ?>
<div class="article-wrap">
	<div class="article-title"><?php echo $article_item['post_title'] ?></div>
	<div class="article-author"><?php echo $article_item['post_author'] ?></div>
	<div class="article-date"><?php echo $article_item['post_date'] ?></div>
	<div class="article-content"><?php echo htmlspecialchars(substr($article_item['post_content'],0,400)) ?></div>
</div>
<?php endforeach ?>


