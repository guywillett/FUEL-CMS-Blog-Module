<?php $categories = $CI->fuel->blog->get_published_categories(); ?>
<?php if ( ! empty($categories)) : ?>
<div class="widget">
	<h4>Categories</h4>
	<ul>
		<?php foreach ($categories as $category) : ?>
		<li>
			<?=fuel_edit($category)?>
			<a href="<?=$category->url?>"><i class="icon-angle-right"></i><?=$category->name?></a> (<?=$category->posts_count?>)
		</li>
		<?php endforeach; ?>
	</ul>
    <p>We like to write about what has intrigued, excited and occasionally annoyed us!</p>
</div>
<?php endif; ?>