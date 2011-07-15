	<nav>
        <? /*
        <h2>Archives</h2>
        <ul>
            <?php wp_get_archives(array('type' => 'monthly')); ?>
        </ul>
           */?>
		<?php wp_list_categories(array('show_count' => 1, 'title_li' => '<h2>Categories</h2>')); ?>

		<ul>
			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<?php wp_list_bookmarks(); ?>
<? /*
				<li><h2>Meta</h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
   */ ?>

			<?php } ?>
		</ul>
        <ul>
			<li><?php get_search_form(); ?></li>
		</ul>
	</nav>
    <aside>
        <script src="http://widgets.twimg.com/j/2/widget.js"></script>
        <script>
        new TWTR.Widget({
          version: 2,
          type: 'profile',
          rpp: 10,
          interval: 6000,
          width: 225,
          height: 300,
          theme: {
            shell: {
              background: '#ffffff',
              color: '#000000'
            },
            tweets: {
              background: '#ffffff',
              color: '#000000',
              links: '#2A642A'
            }
          },
          features: {
            scrollbar: false,
            loop: false,
            live: false,
            hashtags: true,
            timestamp: true,
            avatars: false,
            behavior: 'all'
          }
        }).render().setUser('johnclarkemills').start();
        </script>
    </aside>
