<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package pamfolio
 */
?>

<div id="content" class="content-home">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="entry-content">
			<?php the_content(); ?>

			<!-- ABOUT SECTION -->
			<?php while( has_sub_field('about') ) : ?>
			  
			  <div class="about" id="about">
			      <p><?php the_sub_field('about_text') ?></p>

			      <?php $image = get_sub_field('profile_photo'); ?>
			      <img src="<?php echo $image['sizes']['medium'] ?>">
			  </div>

			 <?php endwhile; ?>
			 <!-- END ABOUT SECTION -->

			<!-- SKILLS SECTION -->
			<div class="skills" id="skills">
				<?php while( has_sub_field('skills') ): ?>
					
					<div class="skills-item">
			      <?php $image = get_sub_field('skills_icon'); ?>
			      <img src="<?php echo $image['sizes']['medium'] ?>">

			      <p><?php the_sub_field('skills_text'); ?></p>
			     </div>

			 <?php endwhile; ?>
			</div>
			 <!-- END SKILLS SECTION -->
			
			<!-- PORTFOLIO SECTION -->
			 

				<?php get_template_part( 'content', 'porthome' ); ?>
				<!-- END PORTFOLIO SECTION -->

			<!-- CONTACT SECTION -->

				<div class="contact" id="contact">
					<p><?php the_field('contact'); ?></p>
				</div>
			<!-- END CONTACT SECTION -->
			
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'pamfolio' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
		<footer class="entry-footer">
			<?php edit_post_link( __( 'Edit', 'pamfolio' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
</div>
