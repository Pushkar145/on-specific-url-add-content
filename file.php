<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; 
									if (strpos($url,'working-capital') && strpos($url,'islamic')) {?>
										<div class="sub-main-cls">
											<a class="btn-read" href="<?php the_sub_field('additional_information_section_title_url'); ?>">Learn More</a>
									</div>
								<?php	}
										?>
