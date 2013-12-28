<?php get_header(); ?>
		<div class="main_headline">
			<img class="block_headline" src="/wp-content/themes/madonna/images/footer_headline.png">
			<div class="main_headline_cont">
				<div style="float: left;">Новости</div>
			</div>
		</div>
		<div id="main_container_wrp">
			<div id="main_container">
				<div id="center_content">
					<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
						<div class="post">
							<div class="short_post_top">
								<span class="short_post_date"><?php the_time('d.m.Y'); ?></span>
								<h2 class="short_post_headline"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
							</div>
							<div class="content_wrp">
								<?php the_content(); ?>
								
								<div class="navigation">
									<?php previous_post_link('&laquo; %link') ?> &nbsp;&nbsp;&nbsp; <?php next_post_link(' %link &raquo;') ?>
								</div>								
								
								<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
								<!--<p class="postmetadata">
									<div class="comments_number">
										<?php// comments_popup_link('No comments', '1 Comment', '% Comments'); ?> 
									</div>	
									<?php //comments_template(); ?>
								</p>-->
							</div>
						</div>
					<?php endwhile; ?>
					<?php else : ?>
						<div class="post" id="post-<?php the_ID(); ?>">
							<h2><?php _e('Not Found'); ?></h2>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>	
<?php get_footer(); ?>