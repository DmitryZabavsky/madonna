<?php
/*
Template Name: Home template
*/
?>
<?php get_header(); ?>
			<div id="main_slider">
				<img src="/wp-content/themes/madonna/images/mainslider_slide_3.png" />
				<img src="/wp-content/themes/madonna/images/mainslider_slide_2.png" />
				<img src="/wp-content/themes/madonna/images/mainslider_slide_1.png" />
			</div>			
			<div id="home_container_wrp">
				<div id="home_container">
					<div id="left_content">
						<div class="main_boxes_wrap">
							<div class="home_news_box">
								<h3>Новости</h3>

								<?php query_posts( array( 'post_type' => 'madonna_newshomepage', 'showposts' => 1 ) ); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<div class="trending_blogs_post">
									<img src="<?php echo catch_that_image() ?>" alt="<?php the_title(); ?>" />
									<?php the_content_limit(350, ""); ?>
								</div>
								<?php endwhile; endif; wp_reset_query(); ?>
							</div>
							<img src="/wp-content/themes/madonna/images/main_boxes_shadow.png">
						</div>	
						<div class="main_boxes_wrap">	
							<div class="home_discount_box">
								<h3>Скидки</h3>
								
								<?php query_posts( array( 'post_type' => 'madonna_discount', 'showposts' => 1 ) ); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<div class="trending_blogs_post">
									<img src="<?php echo catch_that_image() ?>" alt="<?php the_title(); ?>" />
									<?php the_content_limit(350, ""); ?>
								</div>
								<?php endwhile; endif; wp_reset_query(); ?>
								
							</div>
							<img src="/wp-content/themes/madonna/images/main_boxes_shadow.png">
						</div>
						<div class="bestsellers">
							<div class="homepage_ribbon_wrp">
								<img class="block_headline" src="/wp-content/themes/madonna/images/ribbon_hits.png">
								<div class="homepage_ribbon_cont">
									Хиты продаж
								</div>
							</div>
							<div class="bestsellers_slider">
								<img src="/wp-content/themes/madonna/images/bestsellers_img_1.jpg" />
								<img src="/wp-content/themes/madonna/images/bestsellers_img_2.jpg" />
								<img src="/wp-content/themes/madonna/images/bestsellers_img_3.jpg" />
								<img src="/wp-content/themes/madonna/images/bestsellers_img_4.jpg" />
							</div>
							<div class="bs_nav_wrap">
								<a href="#"></a>
								<a href="#"></a>
								<a href="#"></a>
								<a href="#"></a>
								<a href="#" class="artive"></a>
							</div>
						</div>
						<div class="home_aboutus">	
							<div class="homepage_ribbon_wrp">
								<img class="block_headline" src="/wp-content/themes/madonna/images/ribbon_about.png">
								<div class="homepage_ribbon_cont">
									О нас
								</div>
							</div>
							<div class="block_content">
								<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
									<?php the_content(); ?>
								<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
						<div class="home_reviews">	
							<div class="homepage_ribbon_wrp">
								<img class="block_headline" src="/wp-content/themes/madonna/images/ribbon_reviews.png">
								<div class="homepage_ribbon_cont">
									Отзывы
								</div>
							</div>
							<div class="block_content">
								<?php query_posts( array( 'post_type' => 'madonna_reviews', 'showposts' => 10 ) ); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<div class="trending_blogs_post">
									<?php the_content(); ?>
								</div>
								<?php endwhile; endif; wp_reset_query(); ?>
							</div>	
						</div>
					</div>
					<div id="right_content">
						<div class="category_box_wrap">
							<a href="/?madonna_section=wedding-dresses">
								<div class="category_box_img_wrap">
									<img src="/wp-content/themes/madonna/images/img_kolekcii_1.jpg">
								</div>
								<div class="category_box_label_wrap">
									Свадебные платья
								</div>
							</a>	
						</div>
						<div class="category_box_wrap">
							<a href="/?madonna_section=evening-dresses">
								<div class="category_box_img_wrap">
									<img src="/wp-content/themes/madonna/images/img_kolekcii_2.jpg">
								</div>
								<div class="category_box_label_wrap">
									Вечерние платья
								</div>
							</a>
						</div>
						<div class="category_box_wrap">
							<a href="#">
								<div class="category_box_img_wrap">
									<img src="/wp-content/themes/madonna/images/img_kolekcii_3.jpg">
								</div>
								<div class="category_box_label_wrap">
									Женские вечерние платья
								</div>
							</a>
						</div>
						<div class="category_box_wrap">
							<a href="/?madonna_section=graduation-dresses">
								<div class="category_box_img_wrap">
									<img src="/wp-content/themes/madonna/images/img_kolekcii_4.jpg">
								</div>
								<div class="category_box_label_wrap">
									Выпускные платья
								</div>
							</a>
						</div>
						<div class="category_box_wrap">
							<a href="#">
								<div class="category_box_img_wrap">
									<img src="/wp-content/themes/madonna/images/img_kolekcii_5.jpg">
								</div>
								<div class="category_box_label_wrap">
									Платья крупных размеров
								</div>
							</a>
						</div>
						<div class="category_box_wrap">
							<a href="#">
								<div class="category_box_img_wrap">
									<img src="/wp-content/themes/madonna/images/img_kolekcii_6.jpg">
								</div>
								<div class="category_box_label_wrap">
									Смокинг
								</div>
							</a>
						</div>
						<div class="category_box_wrap">
							<a href="#">
								<div class="category_box_img_wrap">
									<img src="/wp-content/themes/madonna/images/img_kolekcii_7.jpg">
								</div>
								<div class="category_box_label_wrap">
									Свадебная обувь
								</div>
							</a>
						</div>
						<div class="category_box_wrap">
							<a href="/?madonna_section=cocktail-dresses">
								<div class="category_box_img_wrap">
									<img src="/wp-content/themes/madonna/images/img_kolekcii_8.jpg">
								</div>
								<div class="category_box_label_wrap">
									Коктейльные платья
								</div>
							</a>
						</div>
						<div class="category_box_wrap">
							<a href="#">
								<div class="category_box_img_wrap">
									<img src="/wp-content/themes/madonna/images/img_kolekcii_9.jpg">
								</div>
								<div class="category_box_label_wrap">
									Вечерняя обувь
								</div>
							</a>
						</div>
						<div class="category_box_wrap">
							<a href="#">
								<div class="category_box_img_wrap">
									<img src="/wp-content/themes/madonna/images/img_kolekcii_10.jpg">
								</div>
								<div class="category_box_label_wrap">
									Аксессуары
								</div>
							</a>
						</div>
						<div class="category_box_wrap">
							<a href="#">
								<div class="category_box_img_wrap">
									<img src="/wp-content/themes/madonna/images/img_kolekcii_11.jpg">
								</div>
								<div class="category_box_label_wrap">
									Аксессуары для свадьбы
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>	
		</div>
<?php get_footer(); ?>		