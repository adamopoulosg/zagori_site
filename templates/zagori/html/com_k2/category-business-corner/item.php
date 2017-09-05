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

?>


<?php
$catimage;

$path = '/media/k2/categories/'.$this->item->category->id.'.jpg'; 
if (JFile::exists(JPATH_SITE.$path)) { 
  $catimage = JURI::root(true).$path; 
}






?>



<div class="container-fluid generic-items nopadding">

<div class="row main_top_promo" style="background-image:url(<?php echo $catimage ?>); background-repeat:no-repeat; background-size:contain;">
 <img alt="<?php echo K2HelperUtilities::cleanHtml($this->item->title); ?>" src="<?php echo $catimage; ?>" class="img-responsive visible-sm visible-xs"/>
 <div class="main_top_title">
  <h1><?php echo $this->item->title; ?></h1>
 </div>
 <div  class="main_top_text zagori-blue visible-lg visible-md" >
 <?php if($this->item->params->get('itemImage') && !empty($this->item->image)): ?>
		<!-- Item Image -->
		<div class="main_top_inner_image">
			
				
					<img src="<?php echo $this->item->image; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" class="img-responsive" />
				
			

			
		</div>
		<?php endif; ?>
 <div class="main_top_text_title"></div>
 <div class="main_top_text_body" >
 <?php if($this->item->params->get('itemIntroText')): ?>
		<!-- Item introtext -->
		
			<?php echo $this->item->introtext; ?>
		
		<?php endif; ?>

		<?php if($this->item->params->get('itemFullText')): ?>
		
			<?php echo $this->item->fulltext; ?>
		
		<?php endif; ?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        </div>
 </div>
</div>

<div class="row delta-nopadding">
<div  class="main_top_text_mob zagori-blue  visible-sm visible-xs">
 <?php if($this->item->params->get('itemImage') && !empty($this->item->image)): ?>
		<!-- Item Image -->
		<div class="main_top_inner_image">
			
				
					<img src="<?php echo $this->item->image; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" class="img-responsive" />
				
			

			
		</div>
		<?php endif; ?>

 <div class="main_top_text_title"></div>
 <div class="main_top_text_body "><?php if($this->item->params->get('itemIntroText')): ?>
		<!-- Item introtext -->
		
			<?php echo $this->item->introtext; ?>
		
		<?php endif; ?>

		<?php if($this->item->params->get('itemFullText')): ?>
		
			<?php echo $this->item->fulltext; ?>
		
		<?php endif; ?></div>
 </div>

<p class="visible-lg visible-md">&nbsp;</p>

</div>



</div>


<div class="zagori-white zagori_related-items">

	<?php if($this->item->params->get('itemRelated') && isset($this->relatedItems)): ?>
	<!-- Related items by tag -->
	
    
    
    
    
    
		<!--<h3 align="center"><?php echo JText::_("K2_RELATED_ITEMS_BY_TAG"); ?></h3>-->
        <div class="related_slider" >
        <?php foreach($this->relatedItems as $key=>$item): ?>
        		
       
       
       		<?php if($this->item->params->get('itemRelatedImageSize')): ?>
				
                
                
                <div class="slide" >
                <div >
                <a class=""  href="<?php echo $item->link ?>" title="<?php echo $item->title; ?>" ><img class="img-responsive" src="<?php echo $item->image; ?>" alt="<?php echo $item->title; ?>" /></a>
                <div class="main_top_thumb_title"><h3><?php echo $item->title ?></h3></div>
                     <div class="visible-md visible-lg main_top_thumb_body">
                     <?php if($this->item->params->get('catItemIntroText')): ?>
                              
                            <?php //echo $this->item->introtext;
                            
                            
                            
                            
                            
                            $ss=$item->introtext; 
                            //echo substr($ss, 0, 100).'...';
                            echo mb_substr($ss,0,70, "utf-8").'...';
                             ?>
                         
                          <?php endif; ?>
                     </div>
                     <div class="main-more-btn"><a href="<?php echo $item->link; ?>" class="learn_more_btn"><?php echo JText::_('K2_VIEW_ITEMS'); ?></a></div>
                </div>
                
                </div>
                
                
                
				<?php endif; ?>
       
       
       
       
       
       
        	<?php endforeach; ?>
            
            
            
            
            
            
            
		
        
         </div>
        
	
	<?php endif; ?>

</div>


<?php
echo '
<script>
jQuery(document).ready(function($) {
	

	$(".related_slider").bxSlider({
    slideWidth: 285,
    minSlides: 1,
    maxSlides: 3,
    moveSlides: 3,
    slideMargin: 10
  });
});
	
	
	
	
	
	
	</script>
	';

?>