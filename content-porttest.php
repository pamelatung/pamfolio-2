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

 		<div class="portfolio-header">
 			<h2>Work by Pamela</h2>
 		</div>
	
		<?php if ($portfolioQuery->have_posts() ) : ?>
				<?php while ($portfolioQuery->have_posts()) : $portfolioQuery->the_post(); ?>			
					
					<div class="port-item">
						<section id="<?php echo $post->post_name; ?>">

							<?php while( has_sub_field('portfolio_single') ): ?>
							  
						      <?php $image = get_sub_field('image_single'); ?>

										<div class="big">
											<div class="single-image">
								     	 <img src="<?php echo $image['sizes']['large'] ?>">
								      </div>
 								    	<div class="overlay">

								    	</div>
								    </div>

							 <?php endwhile; ?>
						</section>
					</div>

				<?php endwhile; ?>

		<?php wp_reset_postdata(); ?>

		<?php endif; ?>

	</div>