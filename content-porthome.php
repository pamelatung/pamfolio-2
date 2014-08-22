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
	
		<?php if ($portfolioQuery->have_posts() ) : ?>
				<?php while ($portfolioQuery->have_posts()) : $portfolioQuery->the_post(); ?>			
					
					<div class="port-item">
						<section id="<?php echo $post->post_name; ?>">

							<?php while( has_sub_field('images') ): ?>
							  
						      <?php $image = get_sub_field('image'); ?>
									<a href="<?php esc_url( the_permalink() ) ?>">
										<div class="big" style="background-image:url(<?php echo $image['sizes']['large'] ?>);">
								    	<div class="overlay">
								    		<div class="item-title">
								    			<a href="<?php esc_url( the_permalink() ) ?>">
								    				<h3><?php the_title(); ?></h3>
								    			</a>
								    		</div>
								    	</div>
								    </div>

							 <?php endwhile; ?>
						</section>
					</div>

				<?php endwhile; ?>

		<?php wp_reset_postdata(); ?>

		<?php endif; ?>

	</div>