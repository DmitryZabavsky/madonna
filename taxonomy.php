<?php get_header(); ?>
<?php
	$term = get_term_by( 'slug', 
	get_query_var( 'term' ), 
	get_query_var( 'taxonomy' ) 
	);
	$category_id = $term->term_id;
	$category_name = $term->name;
	$category_slug = $term->slug;
	$category_description = $term->description;
	
	if ($_GET['madonna_brend_id'] != "") {
		$brend_id = $_GET['madonna_brend_id'];
		$breadcrumb_brend_sql = "SELECT `name` from `wp_terms` WHERE `term_id` = '$brend_id'";
		$breadcrumb_brend_sql_result = mysql_query($breadcrumb_brend_sql);
		$breadcrumb_brend_name = mysql_fetch_array($breadcrumb_brend_sql_result);
	}
	
	if ($_GET['madonna_product_id'] != "") {
		$product_id = $_GET['madonna_product_id'];
		
		$product_mainimgs_sql = "SELECT * from `wp_posts` WHERE `ID` IN(SELECT `meta_value` FROM `wp_postmeta` WHERE `post_id` = '$product_id' AND `meta_key` = 'madonna_main_image')";
		$product_mainimgs_sql_result = mysql_query($product_mainimgs_sql);
		$product_mainimgs_row = mysql_fetch_array($product_mainimgs_sql_result);
		
		$product_otherimgs_sql = "SELECT * from `wp_posts` WHERE `ID` IN(SELECT `meta_value` FROM `wp_postmeta` WHERE `post_id` = '$product_id' AND `meta_key` = 'madonna_other_image')";
		$product_otherimgs_sql_result = mysql_query($product_otherimgs_sql);
		while($row = mysql_fetch_array($product_otherimgs_sql_result)) {
			$otherimgs_row[] = $row['guid'];
		}
	}
	
?>

		<div class="main_headline">
			<img class="block_headline" src="/wp-content/themes/madonna/images/footer_headline.png">
			<div class="main_headline_cont">
				<div style="float: left;">Коллекции</div>
				<div style="float: right;"><?php echo $category_name; ?></div>
			</div>
		</div>
		<div id="main_container_wrp">		
			<div id="main_container">
				<div id="left_sidebar">
					<?php get_sidebar(); ?>
				</div>
				<div id="main_content">
				<?php
				if ($_GET['madonna_section'] != "" AND $_GET['madonna_brend_id'] == "" AND $_GET['madonna_product_id'] == "") {
				?>
					<div class="center_content_wrp">
						<div class="block_content">
							<?php echo $category_description; ?>
						</div>
					</div>
						
				<?php
					
					$madonna_sql = "SELECT * from `wp_terms` WHERE `term_id` IN(SELECT `term_id` FROM `wp_term_taxonomy` WHERE `taxonomy` = 'madonna_brend' AND `term_taxonomy_id` IN (SELECT DISTINCT `term_taxonomy_id` FROM `wp_term_relationships` WHERE `object_id` IN(SELECT `ID` FROM `wp_posts` WHERE `ID` IN (SELECT `object_id` FROM `wp_term_relationships` WHERE `term_taxonomy_id` = '$category_id'))))";
					$madonna_sql_result = mysql_query($madonna_sql);	
					while($row = mysql_fetch_array($madonna_sql_result)) {
						$option_name = 'z_taxonomy_image'.$row['term_id'];
						$madonna_taximg_sql = "SELECT `option_value` FROM `wp_options` WHERE `option_name` = '$option_name'";
						$madonna_taximg_sql_result = mysql_query($madonna_taximg_sql);
						$taximg_sql_link = mysql_fetch_array($madonna_taximg_sql_result);
						
						echo "
							<a href='?madonna_section=".$category_slug."&madonna_brend_id=".$row['term_id']."'>
							<div class='brend_img_shadow_wrp'>
							<div class='brend_img_bg_wrp'>
						";
						echo "<img src=".$taximg_sql_link['option_value'].">";
						echo "
							<div class='brend_text_block_wrp'>
							<table class='brend_text_table'><tr><td>
						";
						echo $row['name'];
						echo "
							</td>
							</tr>
							</table>
							</div>
						";	
						echo "
							</div>
							</div>
							</a>
						";
					}

				}	
				?>
					
				<?php
				if ($_GET['madonna_section'] != "" AND $_GET['madonna_brend_id'] != "" AND $_GET['madonna_product_id'] == "") {
				?>
					<div class="breadcrumbs">
						<h2><a href="/?madonna_section=<?php echo $_GET['madonna_section'] ?>"><?php echo $category_name; ?></a> - <?php echo $breadcrumb_brend_name['name']; ?></h2>
					</div>
					<?php
					$madonna_current_brend_id = $_GET['madonna_brend_id'];
					$madonna_prod_sql = "SELECT * from `wp_posts` WHERE `ID` IN(SELECT `object_id` FROM `wp_term_relationships` WHERE `term_taxonomy_id` = '$madonna_current_brend_id')";
					//echo $madonna_prod_sql;
					$madonna_prod_sql_result = mysql_query($madonna_prod_sql);
					while($prodlist_row = mysql_fetch_array($madonna_prod_sql_result)) {
					
						$product_mainimgs_inlist_sql = "SELECT * from `wp_posts` WHERE `ID` IN(SELECT `meta_value` FROM `wp_postmeta` WHERE `post_id` = '$prodlist_row[ID]' AND `meta_key` = 'madonna_main_image')";
						$product_mainimgs_inlist_sql_result = mysql_query($product_mainimgs_inlist_sql);
						$product_mainimgs_inlist_row = mysql_fetch_array($product_mainimgs_inlist_sql_result);					
					
						echo "
							<a href='?madonna_section=".$_GET['madonna_section']."&madonna_brend_id=".$_GET['madonna_brend_id']."&madonna_product_id=".$prodlist_row['ID']."'><div class='brend_blok_wrp'>
							<div class='brend_img_shadow_wrp'>
							<div class='brend_img_bg_wrp'>
						";
						echo "<img src=".$product_mainimgs_inlist_row['guid'].">";
						echo "
							<div class='brend_text_block_wrp'>
							<table class='brend_text_table' style='width: 165px;'><tr><td>
						";
						echo $prodlist_row['post_title'];
						echo "
							</td>
							</tr>
							</table>
							</div>
						";	
						echo "
							</div>
							</div>
							</div>
							</a>
						";	
					}
					?>
				<?php
				}
				if ($_GET['madonna_section'] != "" AND $_GET['madonna_brend_id'] != "" AND $_GET['madonna_product_id'] != "") {
					$madonna_proddetails_sql = "SELECT * from `wp_posts` WHERE `ID` = '$_GET[madonna_product_id]'";
					$madonna_proddetails_sql_result = mysql_query($madonna_proddetails_sql);
					$proddetails_sql_link = mysql_fetch_array($madonna_proddetails_sql_result);		
					
					$madonna_details_sql = "SELECT * from `wp_postmeta` WHERE `post_id` = '$_GET[madonna_product_id]'";
					$madonna_details_sql_result = mysql_query($madonna_details_sql);
					while($details_row = mysql_fetch_array($madonna_details_sql_result)) {
						$productdetails_row[$details_row['meta_key']] = $details_row['meta_value'];
					}
					?>
				
					<div class="left_content">
						<h2><a href="/?madonna_section=<?php echo $_GET['madonna_section'] ?>"><?php echo $category_name; ?></a> - <a href="/?madonna_section=<?php echo $_GET['madonna_section'] ?>&madonna_brend_id=<?php echo $_GET['madonna_brend_id'] ?>"><?php echo $breadcrumb_brend_name['name']; ?></a> - <?php echo $proddetails_sql_link['post_title']; ?></h2>
						<?php if($product_mainimgs_row['guid'] != "") { ?>
						<div class="product_main_image_wrp">
							<img src="<?php echo $product_mainimgs_row['guid']; ?>" />
						</div>
						<?php } ?>
						<div class="product_info">
						<br>
						<?php if ($productdetails_row['madonna_color_on_photo'] != "") { ?>
							<b>Цвет на фотографии:</b> <?php echo $productdetails_row['madonna_color_on_photo'] ?> <br>
						<?php } ?>
						<?php if ($productdetails_row['madonna_metarial'] != "") { ?>
							<b>Материал:</b>  <?php echo $productdetails_row['madonna_metarial'] ?> <br>
						<?php } ?>	
						<?php if ($productdetails_row['madonna_more_details'] != "") { ?>
							<b>Дополнительные детали:</b>  <?php echo $productdetails_row['madonna_more_details'] ?> <br>
						<?php } ?>	
						<?php if ($productdetails_row['madonna_available_color'] != "") { ?>
							<b>Цвет в наличии:</b>  <?php echo $productdetails_row['madonna_available_color'] ?> <br>
						<?php } ?>	
						<?php if ($productdetails_row['madonna_size'] != "") { ?>
							<b>Размер:</b>  <?php echo $productdetails_row['madonna_size'] ?> <br>
						<?php } ?>	
						<br>
						<?php echo $proddetails_sql_link['post_content'] ?> 
						</div>
					</div>
					<div class="right_content">
					<?php 

					if ($otherimgs_row != "") {
						foreach ($otherimgs_row as $value) {
							echo "<div class='product_small_image_wrp'>";
							echo "<img src='".$value."'>";
							echo "</div>";
						}
					}	
					?>
					
					<a href="$ENTRY_URL$"><img id="bigImg" src="$IMG_URL1$" border="1" width="550" alt="$ENTRY_TITLE$"></a>
					<div class="thumbs"> 
					<a href="$IMG_URL1$"><img src="$IMG_SMALL_URL1$" border="1" height="120" width="160"></a> 
					<a href="$IMG_URL2$"><img src="$IMG_SMALL_URL2$" border="1" height="120" width="160"></a> 
					<a href="$IMG_URL3$"><img src="$IMG_SMALL_URL2$" border="1" height="120" width="160"></a> 
					</div>
					<script type="text/javascript"> 
					$(function(){ 
					$('.thumbs a').click(function(){ 
					$('#bigImg').attr({src:$(this).attr('href')}); 
					return false;}); 
					}); 
					</script>
				<?php	
				}
				?>
				</div>
				

			</div>
		</div>
				

<?php get_footer(); ?>		