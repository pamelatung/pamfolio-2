 	<?php 
 	$portfolioQuery = new WP_Query(
 			array(
 						'posts_per_page' => -1,
 						'post_type' => 'portfolio',
 						'orderby' => 'menu_order',
 						'order' => 'ASC'
 				)
 		); ?>

 	<div class="portfolio" id="portfolio">

<!--  		<div class="portfolio-header">
 			<h2>Work by Pamela</h2>
 		</div> -->
	
		<?php if ($portfolioQuery->have_posts() ) : ?>
				<?php while ($portfolioQuery->have_posts()) : $portfolioQuery->the_post(); ?>			
					
					<div class="port-item">
						<section id="<?php echo $post->post_name; ?>">

							<?php while( has_sub_field('portfolio_single') ): ?>
							  
						      <?php $image = get_sub_field('image_single'); ?>

										<div class="big">
								     	 <img src="<?php echo $image['sizes']['large'] ?>">	

								     	 <a href="<?php the_field('demo_link') ?>">See The Demo Here!</a>

											<div class="project-text">

												<p class="item-name"><?php the_field('item_name') ?></p>

									     	 <p><?php the_field('long_description') ?></p>

									     	 <p><?php the_field('short_description') ?></p>

									     	 <p>Client: <?php the_field('client_name') ?></p>
									    </div>	

 								    	<div class="overlay">
 								    		<h3><?php the_title(); ?></h3>				
 								    		<p class="overlay-desc"><?php the_field('short_description') ?></p>
 								    		<p class="close-me">Close Me</p>						
								    	</div>
								    	
								    </div>

							 <?php endwhile; ?>
						</section>
					</div>

				<?php endwhile; ?>

		<?php wp_reset_postdata(); ?>

		<?php endif; ?>

	</div>