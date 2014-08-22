<?php
/**
 * @package pamfolio
 */
?>

<div id="content" class="content-blog">

	<article id="post-<?php the_ID(); ?>" <?php post_class('blog-index'); ?>>
		<header class="entry-header">
			<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php pamfolio_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php //the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'pamfolio' ) ); ?>
		
			<div class="excerpt">
				<?php echo get_excerpt_by_id(); ?>
				<a href="<?php echo get_permalink(); ?>"><p>Continue reading...</p></a>
			</div>
			
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'pamfolio' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
				<?php
					/* translators: used between list items, there is a space after the comma */
					$categories_list = get_the_category_list( __( ', ', 'pamfolio' ) );
					if ( $categories_list && pamfolio_categorized_blog() ) :
				?>
				<span class="cat-links">
					<?php printf( __( 'Posted in %1$s', 'pamfolio' ), $categories_list ); ?>
				</span>
				<?php endif; // End if categories ?>

				<?php
					/* translators: used between list items, there is a space after the comma */
					$tags_list = get_the_tag_list( '', __( ', ', 'pamfolio' ) );
					if ( $tags_list ) :
				?>
				<span class="tags-links">
					<?php printf( __( 'Tagged %1$s', 'pamfolio' ), $tags_list ); ?>
				</span>
				<?php endif; // End if $tags_list ?>
			<?php endif; // End if 'post' == get_post_type() ?>

	
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->

</div> <!-- end content-blog -->

