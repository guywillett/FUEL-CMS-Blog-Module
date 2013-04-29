<?php 
fuel_set_var('body_class', 'blog');
$current_post = $this->fuel->blog->current_post();
if (isset($current_post) AND !$is_home)
{
	fuel_set_var('canonical', $post->url);	
}
?>
<?php $this->load->view('_blocks/header')?>
<div class="page-header">
	<div class="container">
		<h1>Blog <small>Secrets and Pearls of Wisdom</small></h1>
	</div><!--/container-->
</div><!--/page-header-->
<div class="container inner-page">
	<div class="row">
		<div id="main_innerx" class="span9">
		<?php echo fuel_var('body', ''); ?>
		</div>
		<div id="rightx" class="span3">
		<?php //echo $this->fuel->blog->sidemenu(array('search', 'authors', 'categories', 'links', 'archives'))?>
        <?php echo $this->fuel->blog->sidemenu(array('search', 'authors', 'categories', 'links', 'archives'))?>
		</div>
	</div>
</div>
	<div class="clear"></div>
	
<?php $this->load->view('_blocks/footer')?>
