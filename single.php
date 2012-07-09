<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2 class="post-title">
					<div class="comment-count">
						<?php comments_popup_link('<div class="icon-comments"></div> 0', '<div class="icon-comments"></div> 1', '<div class="icon-comments"></div> %'); ?>
					</div>
					<a href="<?php the_permalink() ?>" rel="bookmark" class="entry-title" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h2>
				<div class="subtitle">
					<div class="date updated left"><?php the_time(get_option('date_format')) ?></div>
					<div class="divider left">&nbsp;by&nbsp;</div>
					<div class="left">
						<a class="vcard author" target="_blank" href="https://plus.google.com/u/0/110523674200626115395">
							<span class="fn n">
								<span class="given-name">John</span>
								<span class="additional-name">Clarke</span>
								<span class="family-name">Mills</span>
							</span>
						</a>
					</div>
				</div>
				
				<?php the_content('Read the rest of this entry &raquo;'); ?>
				
				
				<hr class="clearfix" />

				<?php wp_link_pages('before=<p class="pagination">&after=</p>&next_or_number=number&pagelink=page %'); ?>

                <!-- /* <p class="post_tags"><strong>Tagged with:</strong> <?php the_tags('', ', ' ,  ''); ?></p> */ -->
				
				<?php if(function_exists('selfserv_shareaholic')) { selfserv_shareaholic(); } ?>
				
				<p class="post_categories"><strong>Categories:</strong> <?php the_category(', '); ?> </p>
				
				<?php edit_post_link('Edit', '<p>', '</p>'); ?>

				<hr class="clearfix" />

			</article>

			<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

	<?php endif; ?>

<?php get_footer(); ?>
