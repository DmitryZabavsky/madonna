<?php
/*
Template Name: Optom template
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
				<div id="center_content">
					<div class="block_content">
						<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
<?php get_footer(); ?>		