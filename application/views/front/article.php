<link href="<?php echo base_url('public/css/front-article.css') ?>" rel="stylesheet">

<div class="article-wrap">
	<div class="article-title"><?php echo $article_item['post_title'] ?></div>
	<div class="article-author"><?php echo $article_item['post_author'] ?></div>
	<div class="article-date"><?php echo $article_item['post_date'] ?></div>
	<div class="article-content"><?php echo htmlspecialchars($article_item['post_content']) ?></div>
</div>