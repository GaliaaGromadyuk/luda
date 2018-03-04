<?php get_header(); ?>
				<div class="col-1 d-lg-block d-xl-block d-md-block d-none"></div>
				<div class="col-lg-11 col-md-11 col-12">
					<div class="title" id="top">
						<div class="title_block">
							<?php $cat_id2 = get_cat_ID( 'love story' ); ?>
							<h1 class="title_content"><?php echo get_cat_name($cat_id2);?> Shooting</h1>
							<p>Gallery</p>
						</div>
					</div>
					<div class="row alb_row">
						<?php
						$args = array(
							'category_name'    => 'love',
							'numberposts' => 0,
							'order'       => 'DESC',
							'post_type'   => 'post',
							'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
						);

						$posts = get_posts( $args );

						foreach($posts as $post){ setup_postdata($post);
						   ?>
						<div class="col-lg-6 col-xl-6 col-12 alb_col fade alb">
							<div class="alb_block">
								<a href="<?php the_permalink(); ?>">
									<div class="alb_content">
										<div class="bl-6 alb_photo" style="background-image: url(' <?php the_post_thumbnail_url( ); ?> ')">
										</div>
										<div class="bl-6 alb_description">
											<p class="alb_data" ><?php the_field('date_photos');?></p>
											<p class="alb_name"><?php the_title(); ?></p>
										</div>
										<div class="border_block"><div class="border"></div></div>
									</div>
								</a>
							</div>
						</div>
						  <?php
						}

						wp_reset_postdata(); // сброс
						 ?>
					</div>
				</div>
				<div class="to_top">
					<a href="#top">TOP<i class="icon-angle-up"></i></a>
				</div>
<?php get_footer(); ?>
