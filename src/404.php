<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package blank.ly
 */

get_header(); ?>

<section id="mainWrap" class="clearfix <?php echo $layout_type;?> <?php echo $zen->rowClass('main');?>">
	<a id="main-link" name="main-link"></a>
	<div class="zen-container">
		<div class="zen-row">
			<div class="mainwrap zen-spotlight">
				<div id="midCol" class="zen-col zen-col-<?php echo $main_layout->maincontent;?> <?php echo $main_offset;?>">
				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'blankly' ); ?></h1>
					</header><!-- .page-header -->
	
					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'blankly' ); ?></p>
	
						<?php
							get_search_form();
	
							the_widget( 'WP_Widget_Recent_Posts' );
	
							// Only show the widget if site has multiple categories.
							if ( blankly_categorized_blog() ) :
						?>
	
						<div class="widget widget_categories">
							<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'blankly' ); ?></h2>
							<ul>
							<?php
								wp_list_categories( array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								) );
							?>
							</ul>
						</div><!-- .widget -->
	
						<?php
							endif;
	
							/* translators: %1$s: smiley */
							$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'blankly' ), convert_smilies( ':)' ) ) . '</p>';
							the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
	
							the_widget( 'WP_Widget_Tag_Cloud' );
						?>
	
					</div><!-- .page-content -->
				</section><!-- .error-404 -->
			</div>
		</div>
	</div>
</div>
</section>
