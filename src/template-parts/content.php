<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blank.ly
 */


$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$image = $thumb_url_array[0];
$image_name = basename($image);


?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="article-title">', '</h1>' );
			} else {
				the_title( '<h2 class="article-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<aside class="article-aside clearfix">
			<div class="article-info  muted small flat-list article-aside">
				<ul>
					<li><?php blankly_posted_on(); ?></li>
				</ul>
			</div><!-- .entry-meta -->
		</aside>
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	<?php if($image_name !=="default.png") {?>
	<div class="item-image">
		<img src="<?php echo $image;?>" alt="<?php echo the_title();?>" />
	</div>
	<?php } ?>
	<div class="article-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'blankly' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blankly' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="article-footer article-info muted small flat-list clearfix">
		<?php blankly_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
