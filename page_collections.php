<?php
/*
Template Name: Collections template
*/
?>
<?php get_header(); ?>
			<div class="main_headline">
				<img class="block_headline" src="/wp-content/themes/madonna/images/footer_headline.png">
				<div class="main_headline_cont">
					<div style="float: left;">Коллекции</div>
					<!-- <div style="float: right;">Название категории</div> -->
				</div>
			</div>	
			<div id="main_container_wrp">		
				<div id="main_container">
					<div id="left_sidebar">
						<?php get_sidebar(); ?>
					</div>
					<div id="main_content">
						<div class="center_content_wrp">
							<div class="block_content">
								<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
									<?php the_content(); ?>
								<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php get_footer(); ?>		