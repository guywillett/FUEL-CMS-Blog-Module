<div class="">
	<form method="post" action="<?=$this->fuel_blog->url('search')?>" class="search-form">
    <div class="input-append">
		<input type="text" name="q" value="" id="qx" class="span2" placeholder="search" />
		<input type="submit" value="Search" class="btn btn-primary" />
		
		<!-- dummy value. Used so that we can get query strings t00o work if form method equals GET (which by defualt it is not)... needs more then one query string param to work -->
		<input type="hidden" name="x" value="" /> 
		<?php
		if ($this->config->item('csrf_protection')) :
		    $this->security->csrf_set_cookie();
		?>
		    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>"/>
		<?php endif;?>
        </div>
	</form>
</div>