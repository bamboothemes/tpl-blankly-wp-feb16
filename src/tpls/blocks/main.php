<?php defined('ZEN_ALLOW') or die();

/* =====================================================================
Template:	Xero - Base theme for the Zen Grid Framework v4.
Author: 	Anthony Olsen Joomlabamboo
Version: 	1.0
Created: 	August 2014
Copyright:	Anthony Olsen - (C) 2014 - All rights reserved
/* ===================================================================== */

	// Determines the layout type to use.
	// Cant use the standard spotlight function because we need to 
	// Source order the columns here so main content is always on top
	// When collapsed.
	
	$main_layout = $this->layout->main->positions;
	$sidebar1=0;
	$sidebar2=0;
	$sidebar1_offset="";
	$sidebar2_offset="";
	$main_offset="";
	$layout_type="";
	
	foreach ($main_layout as $module => $layout) {
			
			if($module == "maincontent") {
				$layout_type.="m";
			} elseif ($module == "sidebar1") {
				
				$layout_type.="l";
				
				$sidebar1=$this->countModules('sidebar1')?1:0;
				
			} else {
				$layout_type.="r";
				$sidebar2=$this->countModules('sidebar2')?1:0;
			}
	}	
	
	
	// Set the value for the layout
	if($sidebar1 + $sidebar2 == 0) {
		$layout = 'fullwidth';
	}
	elseif ($sidebar1 && !$sidebar2) {
		$layout = 'sidebar1_layout_only';
	} elseif (!$sidebar1 && $sidebar2) {
		$layout = 'sidebar2_layout_only';
	} else {
		$layout = '3columns';
	}
	
	
	
	if($layout_type=="lmr") {
		
		if($layout =="3columns") {
			$sidebar1_offset = "zen-pull zen-pull-".$main_layout->maincontent;
			$main_offset = "zen-push zen-push-". ($main_layout->sidebar1);
			echo '';
		}
		elseif($layout =="sidebar1_layout_only") {
			$main_layout->maincontent = $main_layout->maincontent + $main_layout->sidebar2;
			$sidebar1_offset = "zen-pull zen-pull-".$main_layout->maincontent;
			$main_offset = "zen-push zen-push-". ($main_layout->sidebar1);
		}
		elseif($layout =="sidebar2_layout_only") {
		
			$main_layout->maincontent = $main_layout->maincontent + $main_layout->sidebar1;
		}
					
	} elseif($layout_type=="rm") {
	
		if($sidebar2) {
			$sidebar2_offset = "zen-pull zen-pull-".$main_layout->maincontent;
			$main_offset = "zen-push zen-push-". ($main_layout->sidebar2);
		}
		else {
			
		}
	} elseif($layout_type=="lrm") {
	
		if($sidebar1 && $sidebar2) {
			$sidebar2_offset = "zen-pull zen-pull-".$main_layout->maincontent;
			$main_offset = $main_layout->sidebar1 + $main_layout->sidebar2;
			$main_offset = "zen-push zen-push-".$main_offset;
			$sidebar1_offset= "zen-pull zen-pull-".$main_layout->maincontent;
		}
		elseif($sidebar1) {
			$main_offset = $main_layout->sidebar1;
			$main_offset = "zen-push zen-push-".$main_offset;
			$main_layout->maincontent = $main_layout->maincontent + $main_layout->sidebar2;
			$sidebar1_offset = "zen-pull zen-pull-".$main_layout->maincontent;
		}
		elseif($sidebar2) {
			$main_offset = $main_layout->sidebar2;
			$main_offset = "zen-push zen-push-".$main_offset;
			$main_layout->maincontent = $main_layout->maincontent + $main_layout->sidebar1;
			$sidebar2_offset = "zen-pull zen-pull-".$main_layout->maincontent;
		}
	} elseif($layout_type=="mlr" or $layout_type=="mrl") {
		
		if(!$sidebar1) {
			$main_layout->maincontent = $main_layout->maincontent + $main_layout->sidebar1;
		} elseif(!$sidebar2)  {
			$main_layout->maincontent = $main_layout->maincontent + $main_layout->sidebar2;
		}
	
	}
	
	
	// Check if it should be full width layout
	if($sidebar1 + $sidebar2 == 0) {
		$main_layout->maincontent = 12;
	} 
	
	


?>

<!-- MAIN CONTENT -->
<section id="mainWrap" class="clearfix <?php echo $layout_type;?> <?php echo $this->rowClass('main');?>">
	<a id="main-link" name="main-link"></a>
	<?php if ($this->countModules('breadcrumbs')) : ?>
	<section id="breadcrumbwrap" class="clearfix">
		<div class="zen-container">
			<div class="zen-row">
				<div class="zen-spotlight">
				
					<!-- Banner-slogan -->
					<div id="breadcrumb" class="zen-col zen-col-12">
						  <?php $this->loadModule('breadcrumbs');?>
					</div>
					<!-- //breadcrumb -->
				</div>
			</div>
		</div>
	</section>
	<?php endif ?>
	
	
	<?php if ($this->countModules('above')) : ?>
	<section id="abovewrap" class="clearfix <?php echo $this->rowClass('above');?>">
		<div class="zen-container">
			<div class="zen-row">
				<div class="zen-spotlight">
				
					<!-- Banner-slogan -->
					<div id="above" class="zen-col zen-col-12">
						 <?php $this->loadModule('above');?>
					</div>
					<!-- //breadcrumb -->
				</div>
			</div>
		</div>
	</section>
	<?php endif ?>
	
	<div class="zen-container">
		<div class="zen-row">
			<div class="mainwrap zen-spotlight">
				<div id="midCol" class="zen-col zen-col-<?php echo $main_layout->maincontent;?> <?php echo $main_offset;?>">
					
					<?php $this->loadblock('main-content');?>
				</div>
				<?php if($sidebar1) { ?>
				<div id="sidebar-1" class="sidebar zen-col zen-col-<?php echo $main_layout->sidebar1;?> <?php echo $sidebar1_offset;?>" role="complementary">
					<?php $this->loadModule('sidebar1');?>
				</div>
				<?php } ?>
				<?php if($sidebar2) {?>
				<div id="sidebar-2" class="sidebar zen-col zen-col-<?php echo $main_layout->sidebar2;?>  <?php echo $sidebar2_offset;?>" role="complementary">
					<?php $this->loadModule('sidebar2');?>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	
	<?php if ($this->countModules('below')) : ?>
	<section id="belowwrap" class="clearfix">
		<div class="zen-container">
			<div class="zen-row">
				<div class="zen-spotlight">
				
					<!-- Banner-slogan -->
					<div id="below" class="zen-col zen-col-12">
						  <?php $this->loadModule('below');?>
					</div>
					<!-- //breadcrumb -->
				</div>
			</div>
		</div>
	</section>
	<?php endif ?>
	
</section>