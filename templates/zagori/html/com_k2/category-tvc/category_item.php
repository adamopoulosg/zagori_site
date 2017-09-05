<?php
/**
 * @version    2.7.x
 * @package    K2
 * @author     JoomlaWorks http://www.joomlaworks.net
 * @copyright  Copyright (c) 2006 - 2016 JoomlaWorks Ltd. All rights reserved.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die;

// Define default image size (do not change)
K2HelperUtilities::setDefaultImage($this->item, 'itemlist', $this->params);

?>




<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
<div class="col-md-12 col-lg-12 col-sm-6 col-xs-6 main-thumb">
<?php if($this->item->params->get('catItemImage') && !empty($this->item->image)): ?>
	  
		    <a href="<?php echo $this->item->link; ?>" title="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>">
		    	<img src="<?php echo $this->item->image; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" class="img-responsive" />
		    </a>
		 
	 
	  <?php endif; ?>
</div>
<div class="col-md-12 col-lg-12 col-sm-6 col-xs-6">
<p class="visible-lg visible-md"></p>
 <div class="main_top_thumb_title"><h3><?php echo $this->item->title; ?></h3></div>
 <div class="visible-md visible-lg main_top_thumb_body">
 <?php if($this->item->params->get('catItemIntroText')): ?>
	  	  
	  	<?php //echo $this->item->introtext;
		
		
		
		
		
		$ss=$this->item->introtext;
		//echo substr($ss, 0, 190).'...';
		//echo mb_substr($ss,0,90, "utf-8").'...';
		
		 ?>
	 
	  <?php endif; ?>
 </div>
 <div class="main-more-btn"><a href="<?php echo $this->item->link; ?>" class="learn_more_btn"><?php echo JText::_('K2_VIEW_ITEMS'); ?></a></div>

</div>
</div>





 
	  




