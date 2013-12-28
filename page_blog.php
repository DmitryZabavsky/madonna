<?php
/*
Template Name: Blog template
*/
?>
<?php get_header(); ?>
		<div class="main_headline">
			<img class="block_headline" src="/wp-content/themes/madonna/images/footer_headline.png">
			<div class="main_headline_cont">
				<div style="float: left;"><?php the_title() ?></div>
			</div>
		</div>
		<div id="main_container_wrp">		
			<div id="main_container">
				<div id="left_sidebar">
					<?php get_sidebar(); ?>
				</div>
				<div id="main_content">
					<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
						<div class="post">
						<?php the_time('d.m.Y'); ?><h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
							<div class="entry">
								<?php the_content(); ?>
								<!--<p class="postmetadata">
									<?php /* _e('Category&#58;'); ?> <?php the_category(', ') ?>. <?php _e('Author'); ?> <?php  the_author(); ?><br />
									<?php comments_popup_link('No comments', '1 comment', '% comments'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
									<?php comments_template(); ?>
									<?php the_tags('Tags:'); */?>
								</p> -->
							</div>
							<p class="postmetadata"></p>
						</div>
					<?php endwhile; ?>
						<div class="navigation">
							<?php posts_nav_link('','Previous post','Next post'); ?>
						</div>
					<?php else : ?>
						<div class="post" id="post-<?php the_ID(); ?>">
							<h2><?php _e('Not Found'); ?></h2>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
<?php get_footer(); ?>		