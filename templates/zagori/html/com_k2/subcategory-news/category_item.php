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

<?php
$itemlink=$this->item->link;
$target='_self';



 if($this->item->params->get('itemAttachments') && count($this->item->attachments)): ?>
		<!-- Item attachments -->
		
				<?php foreach ($this->item->attachments as $attachment): ?>
                <?php 
				//var_dump($attachment);
				$itemlink='files/'.$attachment->filename; 
				$target='_blank';
				?>
				
				<?php endforeach; ?>
			
		<?php endif; ?>



<div class="row">
<div class="col-md-4 col-lg-4 col-sm-6 col-xs-6 main-thumb">
<?php 

$imag='images/generic.jpg';
if($this->item->params->get('catItemImage') && !empty($this->item->image)){
$imag=$this->item->image;
}

  ?>
	  
		    <a href="<?php echo $itemlink; ?>" target="<?php echo $target; ?>" title="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>">
		    	<img src="<?php echo $imag; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" class="img-responsive" />
		    </a>
		 
	 
	 
</div>
<div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
<p class="visible-lg visible-md"></p>
 <div class="main_top_thumb_title"><h3><?php echo $this->item->title; ?></h3></div>
 <div class="visible-md visible-lg main_top_thumb_body">
 <?php if($this->item->params->get('catItemDateCreated')): ?>
		<!-- Date created -->
        <p>
		<span class="catItemDateCreated">
			<em><?php echo JHTML::_('date', $this->item->created , JText::_('K2_DATE_FORMAT_LC')); ?></em>
		</span>
        </p>
		<?php endif; ?>
 <?php if($this->item->params->get('catItemIntroText')): ?>
	  	  
	  	<?php 
		
		
		
		$ss=$this->item->introtext;
		//echo substr($ss, 0, 190).'...';
		echo $ss;
		
		 ?>
	 
	  <?php endif; ?>
 </div>
 <div class="main-more-btn"><a href="<?php echo $itemlink; ?>" target="<?php echo $target; ?>" class="learn_more_btn"><?php echo JText::_('K2_VIEW_ITEMS'); ?></a></div>

</div>
</div>





 
	  




