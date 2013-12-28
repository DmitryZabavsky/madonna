						<div class="left_sidebar_top_menu">
							<ul>
							<?php
							$args_first_section = array(
								'taxonomy'=>'madonna_section',
								'orderby'=>'ID',
								'hide_empty'=>'0',
								'use_desc_for_title'=>'0',
								'child_of'=>'6',
								'title_li'=>'',
								'echo'=>TRUE
							);
							wp_list_categories( $args_first_section );
							?>	
							</ul>
						</div>	
						<div class="ribbon_accessories_wrp">
							<img class="block_headline" src="/wp-content/themes/madonna/images/ribbon_accessories.png">
							<div class="ribbon_accessories_cont">
								Аксессуары
							</div>
						</div>
						<div class="left_sidebar_accessories_menu">
							<?php
							$args_other_section = array(
								'taxonomy'=>'madonna_section',
								'orderby'=>'ID',
								'hide_empty'=>'0',
								'use_desc_for_title'=>'0',
								'exclude'=>'6',
								'title_li'=>'',
								'echo'=>TRUE
							);
							wp_list_categories( $args_other_section );
							?>
						</div>
							