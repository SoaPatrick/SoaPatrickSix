<form class="search-form" action="<?php echo home_url( '/' ); ?>" method="get">
	<label for="search-collapse--input">
		<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Find stuff..." aria-label="Find stuff...">
	</label>
</form>