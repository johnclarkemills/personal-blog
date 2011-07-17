	<nav>
		<?php wp_list_categories(array('show_count' => 1, 'title_li' => '<h2>Categories</h2>')); ?>
		<ul>
			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<?php wp_list_bookmarks(); ?>
			<?php } ?>
		</ul>
        <ul>
			<li><?php get_search_form(); ?></li>
		</ul>
	</nav>
