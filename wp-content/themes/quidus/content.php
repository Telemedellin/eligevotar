<?php
/**
 * The default template for displaying content
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' );
			endif;
		?>
		<!--<footer class="entry-footer <?php if ( is_single() ) : echo 'single'; endif;?>">
			<?php quidus_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'quidus' ), '<span class="edit-link">', '</span>' ); ?>
		</footer>-->
		<!-- .entry-footer -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		
			/* translators: %s: Name of current post */
			
			if ( is_single() ) :

			the_content( sprintf(
				__( '', 'quidus' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );
			else : 
			the_excerpt(); ?>
			<?php
			endif;
			
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'quidus' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'quidus' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
	
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->