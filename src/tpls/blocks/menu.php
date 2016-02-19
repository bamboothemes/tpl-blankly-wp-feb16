<?php defined('ZEN_ALLOW') or die();

/* =====================================================================
Template:	Xero - Base theme for the Zen Grid Framework v4.
Author: 	Anthony Olsen Joomlabamboo
Version: 	1.0
Created: 	August 2014
Copyright:	Anthony Olsen - (C) 2014 - All rights reserved
/* ===================================================================== */


if($this->params->stickynav) { ?>
	<div id="sticky-fill" class="hidden"></div>
	<?php } ?>
	
	<section id="navwrap" class="wrap <?php echo $this->rowClass('menu');?>">
		<div class="zen-container">
			<div class="navbar-default zen-row">
				<div class="zen-spotlight">
					<div id="menu" class="zen-menu zen-menu-horizontal zen-menu-<?php echo $this->params->menu_align;?> zen-menu-<?php echo $this->params->dropdown_animation;?>">
						<div class="navbar-header ">
							<nav role="navigation">
							<!-- NAVBAR MAIN -->
							<?php if($this->params->onepage) { ?>
								<div id="onepage">
								<ul class="nav navbar-nav">
									<?php if ($this->params->homelink !="") : ?>
									<li>
										<a href="#home-link"><?php echo $this->params->homelink; ?></a>
									</li>
									<?php endif; ?>
									<?php if ($this->checkSpotlight('banner') && ($this->params->bannerlink !="")) : ?>
									<li>
										<a href="#banner-link"><?php echo $this->params->bannerlink; ?></a>
									</li>
									<?php endif; ?>
									<?php if ($this->checkSpotlight('grid1') && ($this->params->grid1link !="")) : ?>
									<li>
										<a href="#grid1-link"><?php echo $this->params->grid1link; ?></a>
									</li>
									<?php endif; ?>
									<?php if ($this->checkSpotlight('grid2') && ($this->params->grid2link !="")) : ?>
									<li>
										<a href="#grid2-link"><?php echo $this->params->grid2link; ?></a>
									</li>
									<?php endif; ?>
									<?php if ($this->checkSpotlight('grid3') && ($this->params->grid3link !="")) : ?>
									<li>
										<a href="#grid3-link"><?php echo $this->params->grid3link; ?></a>
									</li>
									<?php endif; ?>
									<?php if ($this->checkSpotlight('tabs') && ($this->params->tabslink !="")) : ?>
									<li>
										<a href="#tabs-link"><?php echo $this->params->tabslink; ?></a>
									</li>
									<?php endif; ?>
									<?php if(!$this->hideMain())  : ?>
									<?php if ($this->params->mainlink !=="") : ?>
									<li>
										<a href="#main-link"><?php echo $this->params->mainlink; ?></a>
									</li>
									<?php endif; ?>
									<?php endif; ?>
									<?php if ($this->checkSpotlight('grid4') && ($this->params->grid4link !="")) : ?>
									<li>
										<a href="#grid4-link"><?php echo $this->params->grid4link; ?></a>
									</li>
									<?php endif; ?>
									<?php if ($this->checkSpotlight('grid5') && ($this->params->grid5link !="")) : ?>
									<li>
										<a href="#grid5-link"><?php echo $this->params->grid5link; ?></a>
									</li>
									<?php endif; ?>
									<?php if ($this->checkSpotlight('grid6') && ($this->params->grid6link !="")) : ?>
									<li>
										<a href="#grid6-link"><?php echo $this->params->grid6link; ?></a>
									</li>
									<?php endif; ?>
									<?php if ($this->checkSpotlight('bottom') && ($this->params->bottomlink !="")) : ?>
									<li>
										<a href="#bottom-link"><?php echo $this->params->bottomlink; ?></a>
									</li>
									<?php endif; ?>
								</ul>
								</div>
								<?php } else { 
												
										 wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) );
									 } ?>
									
								<!-- //NAVBAR MAIN -->
								<?php if ($this->countModules('offcanvas') || $this->params->navcollapse_type =="offcanvas") : ?>
									<?php if(!$this->countModules('offcanvas')) { 
												$this->params->offcanvas_min_width = 'navcollapse';
									} ?>
									<a class="btn off-canvas-trigger sb-toggle-<?php echo $this->params->offcanvas_position;?> visible-<?php echo $this->params->offcanvas_min_width;?>"><?php echo $this->params->offcanvas_trigger;?></a>
								<?php endif;?>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>