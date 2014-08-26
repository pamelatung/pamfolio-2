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

				<div class="quote" id="about">
					<h2>"Only put off until tomorrow what you are willing to die having left undone."</h2>
				</div>
			  
			  <div class="about">

			  	<div class="about-left">
			  		<p><?php the_sub_field('left_text') ?></p>
			  	</div>

			  	<?php $image = get_sub_field('profile_photo'); ?>
			  	<div class="about-img">
			  		<img src="<?php echo $image['sizes']['large'] ?>">
			  	</div>

			  	<div class="about-bio">
			      <p><?php the_sub_field('about_text') ?></p>
			    </div>

			  </div>

			 <?php endwhile; ?>
			 <!-- END ABOUT SECTION -->

			<!-- SKILLS SECTION -->
			<div class="skills" id="skills">
				<?php while( has_sub_field('skills') ): ?>
					
					<div class="skills-item">
			      <?php $image = get_sub_field('skills_icon'); ?>
			      <img src="<?php echo $image['sizes']['large'] ?>">

			      <p>
			      <span><?php the_sub_field('skill_title'); ?></span>
			      <br>
			      <?php the_sub_field('skills_text'); ?>
			      </p>
						
						<!-- Arrow Buttons -->
						<div class="arrow">
								<div class="shape"></div>
				    
				      	<h4>Info</h4>
				     </div>

			    </div>

			 <?php endwhile; ?>

			 <div class="skills-footer"> 
			 	<p>Projects I have worked on:</p>

			 	 <svg viewBox="0 0 99.5 53.8" data-id="portfolio">
				 	 <g id="Layer_1_1_" display="none">
				 	 	<path display="inline" d="M0,81.4l23.5-40.7L47,0l23.5,40.7L94,81.4H47H0z M47,4L25.2,41.7L3.5,79.4H47h43.5L68.8,41.7L47,4L47,4z"
				 	 		/>
				 	 </g>
				 	 <g id="Layer_2">
				 	 	<polygon stroke-miterlimit="10" points="96.8,1.6 91.6,7.1 55,46.6 49.8,52.2 
				 	 		44.8,46.7 7,6.2 2.8,1.6 11.2,1.6 87,1.6 	"/>
				 	 </g>
			 	 </svg>

			 </div>

			</div>
			 <!-- END SKILLS SECTION -->
			
			<!-- PORTFOLIO SECTION -->
				<?php get_template_part( 'content', 'porttest' ); ?>
				<!-- END PORTFOLIO SECTION -->

			<!-- CONTACT SECTION -->
				<div class="contact" id="contact">
					
					<div class="icon-header">

						<h2>Get in touch with me here:</h2>
						<!-- TWITTER ICON -->
						<a href="https://twitter.com/colourarchive">
							<svg viewBox="0 0 56.693 56.693"><path  d="M28.348,5.157c-13.6,0-24.625,11.027-24.625,24.625c0,13.6,11.025,24.623,24.625,24.623c13.6,0,24.623-11.023,24.623-24.623  C52.971,16.184,41.947,5.157,28.348,5.157z M40.752,24.817c0.013,0.266,0.018,0.533,0.018,0.803c0,8.201-6.242,17.656-17.656,17.656  c-3.504,0-6.767-1.027-9.513-2.787c0.486,0.057,0.979,0.086,1.48,0.086c2.908,0,5.584-0.992,7.707-2.656  c-2.715-0.051-5.006-1.846-5.796-4.311c0.378,0.074,0.767,0.111,1.167,0.111c0.566,0,1.114-0.074,1.635-0.217  c-2.84-0.57-4.979-3.08-4.979-6.084c0-0.027,0-0.053,0.001-0.08c0.836,0.465,1.793,0.744,2.811,0.777  c-1.666-1.115-2.761-3.012-2.761-5.166c0-1.137,0.306-2.204,0.84-3.12c3.061,3.754,7.634,6.225,12.792,6.483  c-0.106-0.453-0.161-0.928-0.161-1.414c0-3.426,2.778-6.205,6.206-6.205c1.785,0,3.397,0.754,4.529,1.959  c1.414-0.277,2.742-0.795,3.941-1.506c-0.465,1.45-1.448,2.666-2.73,3.433c1.257-0.15,2.453-0.484,3.565-0.977  C43.018,22.849,41.965,23.942,40.752,24.817z"/></svg>
						</a>
						<!-- LINKEDIN ICON -->
						<a href="http://ca.linkedin.com/in/tungpamela">
							<svg viewBox="0 0 67 67"><path d="M50.837,48.137V36.425c0-6.275-3.35-9.195-7.816-9.195  c-3.604,0-5.219,1.983-6.119,3.374V27.71h-6.79c0.09,1.917,0,20.427,0,20.427h6.79V36.729c0-0.609,0.044-1.219,0.224-1.655  c0.49-1.22,1.607-2.483,3.482-2.483c2.458,0,3.44,1.873,3.44,4.618v10.929H50.837z M22.959,24.922c2.367,0,3.842-1.57,3.842-3.531  c-0.044-2.003-1.475-3.528-3.797-3.528s-3.841,1.524-3.841,3.528c0,1.961,1.474,3.531,3.753,3.531H22.959z M34,64  C17.432,64,4,50.568,4,34C4,17.431,17.432,4,34,4s30,13.431,30,30C64,50.568,50.568,64,34,64z M26.354,48.137V27.71h-6.789v20.427  H26.354z" style="fill-rule:evenodd;clip-rule:evenodd;"/></svg>
						</a>
						<!-- GITHUB ICON -->
							<a href="https://github.com/pamelatung">
								<svg viewBox="0 0 512 512"><g><path d="M256,32C132.3,32,32,134.8,32,261.7c0,101.5,64.2,187.5,153.2,217.9c11.2,2.1,15.3-5,15.3-11.1   c0-5.5-0.2-19.9-0.3-39.1c-62.3,13.9-75.5-30.8-75.5-30.8c-10.2-26.5-24.9-33.6-24.9-33.6c-20.3-14.3,1.5-14,1.5-14   c22.5,1.6,34.3,23.7,34.3,23.7c20,35.1,52.4,25,65.2,19.1c2-14.8,7.8-25,14.2-30.7c-49.7-5.8-102-25.5-102-113.5   c0-25.1,8.7-45.6,23-61.6c-2.3-5.8-10-29.2,2.2-60.8c0,0,18.8-6.2,61.6,23.5c17.9-5.1,37-7.6,56.1-7.7c19,0.1,38.2,2.6,56.1,7.7   c42.8-29.7,61.5-23.5,61.5-23.5c12.2,31.6,4.5,55,2.2,60.8c14.3,16.1,23,36.6,23,61.6c0,88.2-52.4,107.6-102.3,113.3   c8,7.1,15.2,21.1,15.2,42.5c0,30.7-0.3,55.5-0.3,63c0,6.1,4,13.3,15.4,11C415.9,449.1,480,363.1,480,261.7   C480,134.8,379.7,32,256,32z"/></g></svg>
							</a>
						<!-- CODEPEN ICON -->
							<a href="http://codepend.io/pamt">
								<svg viewBox="0 0 75 75" class="smaller"> <g>
									<path d="M37.3,0C16.7,0,0,16.7,0,37.3s16.7,37.3,37.3,37.3c20.6,0,37.3-16.7,37.3-37.3S57.9,0,37.3,0L37.3,0z M37.3,68.5
										c-17.2,0-31.2-14-31.2-31.2s14-31.1,31.1-31.1c17.2,0,31.2,14,31.2,31.2C68.4,54.5,54.5,68.4,37.3,68.5L37.3,68.5z"/>
									<path d="M60.3,30C60.3,30,60.3,29.9,60.3,30c0-0.1,0-0.2-0.1-0.3c0,0,0-0.1,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0-0.1,0-0.1
										c0,0,0-0.1-0.1-0.1c0,0,0-0.1-0.1-0.1c0,0-0.1-0.1-0.1-0.1c0,0,0-0.1-0.1-0.1c0,0-0.1-0.1-0.1-0.1c0,0-0.1-0.1-0.1-0.1
										c0,0-0.1-0.1-0.1-0.1c0,0-0.1,0-0.1-0.1c0,0,0,0,0,0l-21.1-14c-0.7-0.4-1.5-0.4-2.2,0l-21.1,14c0,0,0,0,0,0c0,0-0.1,0-0.1,0.1
										c0,0-0.1,0.1-0.1,0.1c0,0-0.1,0.1-0.1,0.1c0,0-0.1,0.1-0.1,0.1c0,0,0,0.1-0.1,0.1c0,0-0.1,0.1-0.1,0.1c0,0,0,0.1-0.1,0.1
										c0,0,0,0.1-0.1,0.1c0,0,0,0.1,0,0.1c0,0,0,0.1-0.1,0.1c0,0,0,0.1,0,0.1c0,0.1,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0,0.2,0,0.3v14.1
										c0,0.1,0,0.2,0,0.3c0,0,0,0.1,0,0.1c0,0.1,0,0.1,0.1,0.2c0,0.1,0,0.1,0.1,0.1c0,0.1,0.1,0.1,0.1,0.1c0,0.1,0,0.1,0.1,0.1
										c0,0.1,0.1,0.1,0.1,0.1c0,0,0.1,0.1,0.1,0.1c0,0.1,0.1,0.1,0.1,0.1c0,0,0.1,0.1,0.1,0.1c0,0.1,0.1,0.1,0.1,0.1c0,0,0.1,0.1,0.1,0.1
										c0,0.1,0.1,0.1,0.1,0.1c0,0,0.1,0.1,0.1,0.1c0,0,0,0,0.1,0l21,14.1c0.3,0.2,0.7,0.3,1.1,0.3c0.4,0,0.8-0.1,1.1-0.3l21.1-14
										c0,0,0,0,0,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0.1-0.1
										c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0.1-0.1c0,0,0-0.1,0.1-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0.1-0.1c0,0,0-0.1,0-0.1c0-0.1,0-0.1,0-0.2
										c0,0,0-0.1,0-0.1c0-0.1,0-0.2,0-0.3V30.3C60.3,30.2,60.4,30.1,60.3,30L60.3,30z M39.3,19.9l15.5,10.3l-6.9,4.6l-8.6-5.7V19.9z
										 M35.3,19.9v9.2l-8.6,5.7l-6.9-4.6L35.3,19.9L35.3,19.9z M18.2,34l5,3.3l-5,3.3V34z M35.3,54.7L19.8,44.3l6.9-4.6l8.6,5.7V54.7z
										 M37.3,42l-7-4.7l7-4.7l7,4.7L37.3,42z M39.3,54.7v-9.2l8.6-5.7l6.9,4.6L39.3,54.7z M56.4,40.6l-5-3.3l5-3.3V40.6z"/>
								</g>
								</svg>
							</a>
						<!-- PINTEREST ICON -->
						<svg viewBox="0 0 56.693 56.693"><g><path d="M28.348,5.158c-13.599,0-24.625,11.023-24.625,24.625c0,10.082,6.063,18.744,14.739,22.553   c-0.069-1.721-0.012-3.783,0.429-5.654c0.473-2,3.168-13.418,3.168-13.418s-0.787-1.572-0.787-3.896   c0-3.648,2.115-6.373,4.749-6.373c2.24,0,3.322,1.682,3.322,3.695c0,2.252-1.437,5.619-2.175,8.738   c-0.616,2.613,1.31,4.744,3.887,4.744c4.665,0,7.808-5.992,7.808-13.092c0-5.397-3.635-9.437-10.246-9.437   c-7.47,0-12.123,5.57-12.123,11.792c0,2.146,0.633,3.658,1.624,4.83c0.455,0.537,0.519,0.754,0.354,1.371   c-0.118,0.453-0.389,1.545-0.501,1.977c-0.164,0.625-0.669,0.848-1.233,0.617c-3.44-1.404-5.043-5.172-5.043-9.408   c0-6.994,5.899-15.382,17.599-15.382c9.4,0,15.588,6.804,15.588,14.107c0,9.658-5.369,16.875-13.285,16.875   c-2.659,0-5.16-1.438-6.016-3.068c0,0-1.43,5.674-1.732,6.768c-0.522,1.9-1.545,3.797-2.479,5.275   c2.215,0.654,4.554,1.01,6.979,1.01c13.598,0,24.623-11.023,24.623-24.623C52.971,16.181,41.945,5.158,28.348,5.158z"/></g></svg>
						<!-- FACEBOOK ICON -->
						<svg viewBox="0 0 56.693 56.693"><path d="M28.347,5.157c-13.6,0-24.625,11.027-24.625,24.625c0,13.6,11.025,24.623,24.625,24.623c13.6,0,24.625-11.023,24.625-24.623  C52.972,16.184,41.946,5.157,28.347,5.157z M34.864,29.679h-4.264c0,6.814,0,15.207,0,15.207h-6.32c0,0,0-8.307,0-15.207h-3.006  V24.31h3.006v-3.479c0-2.49,1.182-6.377,6.379-6.377l4.68,0.018v5.215c0,0-2.846,0-3.398,0c-0.555,0-1.34,0.277-1.34,1.461v3.163  h4.818L34.864,29.679z"/></svg>

					</div> <!-- END icon-header -->
						
					<div class="formWrap">
						<?php echo do_shortcode('[contact-form-7 id="120" title="Contact form 1"]') ?>				
					</div>
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
		<footer class="entry-footer-home">
			
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
</div>
