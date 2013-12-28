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
							<div class="short_post_wrp">
								<div class="short_post_imp_wrp">
									<img src="<?php echo catch_that_image(); ?>" style="width: 200px;">
								</div>
								<div class="short_post_content">
									<div class="short_post_top">
										<span class="short_post_date"><?php the_time('d.m.Y'); ?></span>
										<h2 class="short_post_headline"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
									</div>
									<div class="entry">
										<?php the_content_limit(650); ?>
										<a class="" href="<?php the_permalink() ?>" >Читать дальше...</a>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
						<div class="navigation">
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
<?php get_footer(); ?>		