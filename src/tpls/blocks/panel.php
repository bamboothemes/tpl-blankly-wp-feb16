<?php
defined('_JEXEC') or die;

/* =====================================================================
Template:	Xero - Base theme for the Zen Grid Framework v4.
Author: 	Anthony Olsen Joomlabamboo
Version: 	1.0
Created: 	August 2014
Copyright:	Anthony Olsen - (C) 2014 - All rights reserved
/* ===================================================================== */


?>
<div id="modal-place-holder" class="zen-modal"></div>

<?php if ($this->countModules('panel')) : ?>
<div data-id="zen-panel-1" class="zen-modal">
    <div class="zen-modal-header">
        <div class="zen-modal-close"><span class="zen-icon zen-icon-times"></span></div>
    </div>
    
    <div class="zen-modal-content">
     	 <?php $this->loadModule('panel');?>
    </div>
</div>
<div class="zen-modal-overlay"></div>
<?php endif;?>

