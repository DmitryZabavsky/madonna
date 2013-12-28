<?php get_header(); ?>
		<div class="main_headline">
			<img class="block_headline" src="/wp-content/themes/madonna/images/footer_headline.png">
			<div class="main_headline_cont">
				<div style="float: left;">Результаты поиска</div>
			</div>
		</div>
		<div id="main_container_wrp">
			<div id="main_container">
				<div id="center_content">
				<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
					<div class="post">
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<div class="entry">
							<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>" class="more_link" title="<?php the_title(); ?>">читать далее...</a>
							<p class="postmetadata">
							</p>
						</div>

					</div>
				<?php endwhile; ?>
					<div class="navigation_search">
						<?php posts_nav_link('','Previous page','Next page'); ?>
					</div>
				<?php else : ?>
					<div class="post" id="post-<?php the_ID(); ?>">
						<h2><?php _e('Not Found'); ?></h2>
					</div>
				<?php endif; ?>
				</div>
			</div>
		</div>	
    </div>

<?php get_footer() ?>