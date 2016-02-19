<?php defined('ZEN_ALLOW') or die();


/* =====================================================================
Template:	Xero - Base theme for the Zen Grid Framework v4.
Author: 	Anthony Olsen Joomlabamboo
Version: 	1.0
Created: 	August 2014
Copyright:	Anthony Olsen - (C) 2014 - All rights reserved
/* ===================================================================== */


?> 

	<?php if ($this->countModules('abovecontent')) : ?>
		<!-- Above -->
		<div id="abovecontent">
		  <?php $this->getModules('abovecontent');?>
		</div>
		<!-- //Above -->
	<?php endif ?>
		

	<?php if(JOOMLA) { if($this->hasMessage()) : ?>
		<jdoc:include type="message" />
	<?php  endif; } ?>
	<main role="main">
		<?php
				if ( have_posts() ) :
		
					if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
		
					<?php
					endif;
		
					/* Start the Loop */
					while ( have_posts() ) : the_post();
		
						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );
		
					endwhile;
		
					the_posts_navigation();
		
				else :
		
					get_template_part( 'template-parts/content', 'none' );
		
				endif; ?>
	</main>
		
	<?php if ($this->countModules('belowcontent')) : ?>
	<div class="clearfix"></div>
	<!-- Above -->
	<div id="belowcontent">
		<?php $this->getModules('belowcontent');?>
	</div>
	<!-- //Above -->
	<?php endif ?>
<!-- //MAIN CONTENT -->