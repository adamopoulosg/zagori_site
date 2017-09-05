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

<div class="row main_top_promo" style="background-image:url(<?php echo $catimage ?>); background-repeat:no-repeat; background-size:cover;">
 <img alt="<?php echo K2HelperUtilities::cleanHtml($this->item->title); ?>" src="<?php echo $catimage; ?>" class="img-responsive visible-sm visible-xs"/>
 <div class="main_top_title">
  <h1><?php echo $this->item->title; ?></h1>
 </div>
 <div  class="main_top_text zagori-white visible-lg visible-md" >
 <?php if($this->item->params->get('itemImage') && !empty($this->item->image)): ?>
		<!-- Item Image -->
		<div class="main_top_inner_image">
			
				
					<img src="<?php echo $this->item->image; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" class="img-responsive" />
				
			

			
		</div>
		<?php endif; ?>
 <div class="main_top_text_title"></div>
 <div class="main_top_text_body blacktxt" >
 
 
 
 <?php if($this->item->params->get('itemExtraFields') && count($this->item->extra_fields)): ?>
		
				<?php foreach ($this->item->extra_fields as $key=>$extraField): ?>
				<?php
				$youtube_id; 
				if($extraField->value != '' && $extraField->name=='youtube_id'){
					$youtube_id=$extraField->value;
					
					
				}?>
				
				
				<?php endforeach; ?>
                
                
                
                <iframe class="yt_frame"  src="https://www.youtube.com/embed/<?php echo $youtube_id; ?>?rel=0" frameborder="0" allowfullscreen></iframe>
                
                
                
                
                
			
		<?php endif; ?>
 
 
 
 
 
 
 <?php if($this->item->params->get('itemIntroText')): ?>
		<!-- Item introtext -->
		
			<?php echo $this->item->introtext; ?>
		
		<?php endif; ?>

		<?php if($this->item->params->get('itemFullText')): ?>
		
			<?php echo $this->item->fulltext; ?>
		
		<?php endif; ?>
        
        
        
        
         <?php if(
		$this->item->params->get('itemTwitterButton',1) ||
		$this->item->params->get('itemFacebookButton',1) ||
		$this->item->params->get('itemGooglePlusOneButton',1)
	): ?>
	<!-- Social sharing -->
	<div class="itemSocialSharing">

		<?php if($this->item->params->get('itemTwitterButton',1)): ?>
		<!-- Twitter Button -->
		<div class="itemTwitterButton">
			<a href="https://twitter.com/share" class="twitter-share-button" data-lang="<?php echo $this->item->langTagForTW; ?>" data-via="<?php if($this->item->params->get('twitterUsername')) echo $this->item->params->get('twitterUsername'); ?>"><?php echo JText::_('K2_TWEET'); ?></a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		</div>
		<?php endif; ?>

		<?php if($this->item->params->get('itemFacebookButton',1)): ?>
		<!-- Facebook Button -->
		<div class="itemFacebookButton">
			<div id="fb-root"></div>
			<script>(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id)) return;js=d.createElement(s);js.id=id;js.src="//connect.facebook.net/<?php echo $this->item->langTagForFB; ?>/sdk.js#xfbml=1&version=v2.5";fjs.parentNode.insertBefore(js,fjs);}(document,'script','facebook-jssdk'));</script>
			<div class="fb-like" data-width="200" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
		</div>
		<?php endif; ?>

		<?php if($this->item->params->get('itemGooglePlusOneButton',1)): ?>
		<!-- Google +1 Button -->
		<div class="itemGooglePlusOneButton">
			<div class="g-plusone" data-size="medium"></div>
			<script>window.___gcfg={lang:'<?php echo $this->item->langTagForGP; ?>'};(function(){var po=document.createElement('script');po.type='text/javascript';po.async=true;po.src='https://apis.google.com/js/platform.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(po,s);})();</script>
		</div>
		<?php endif; ?>

		<div class="clr"></div>

	</div>
	<?php endif; ?>
        
        
        
        
        
        
        
        
        
        
        
        
        <?php if($this->item->params->get('itemNavigation') && !JRequest::getCmd('print') && (isset($this->item->nextLink) || isset($this->item->previousLink))): ?>
	<!-- Item navigation -->
	<div class="itemNavigation">
		<?php if(isset($this->item->previousLink)): ?>
        <a class="itemPrevious" href="<?php echo $this->item->previousLink; ?>">
       	<?php echo '< '.JText::_('JPREVIOUS');?><br><span> ( <?php echo $this->item->previousTitle; ?> )</span>
        </a>
        <?php endif; ?>
        
        <?php if(isset($this->item->nextLink)): ?>
        <a class="itemNext" href="<?php echo $this->item->nextLink; ?>">
       <?php echo JText::_('JNEXT').' >';?><br><span>( <?php echo $this->item->nextTitle; ?> ) </span>
        </a>
        <?php endif; ?>
    
    
    
    
		
	</div>
	<?php endif; ?>
       
        
        
        
        
        
        
        
        
        
        
        
        
        
        </div>
 </div>
</div>

<div class="row nopadding">
<div  class="main_top_text_mob zagori-white  visible-sm visible-xs">
 <?php if($this->item->params->get('itemImage') && !empty($this->item->image)): ?>
		<!-- Item Image -->
		<div class="main_top_inner_image">
			
				
					<img src="<?php echo $this->item->image; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" class="img-responsive" />
				
			

			
		</div>
		<?php endif; ?>

 <div class="main_top_text_title"></div>
 <div class="main_top_text_body  blacktxt">
 
  <iframe class="yt_frame" width="320" height="180" src="https://www.youtube.com/embed/<?php echo $youtube_id; ?>?rel=0" frameborder="0" allowfullscreen></iframe>
 
 
 
 		<?php if($this->item->params->get('itemIntroText')): ?>
		<!-- Item introtext -->
		
			<?php echo $this->item->introtext; ?>
		<?php endif; ?>
		

		<?php if($this->item->params->get('itemFullText')): ?>
		
			<?php echo $this->item->fulltext; ?>
		
		<?php endif; ?>
        
        
        
        
        
        
       
        
        
        
        
        
        
       
        
        </div>
        
       
        
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
							//echo mb_substr($ss,0,70, "utf-8").'...';
                            //echo substr($ss, 0, 100).'...';
                            
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
	infiniteLoop: false,
    minSlides: 1,
    maxSlides: 3,
    moveSlides: 3,
    slideMargin: 10
  });
});
	
	
	
	
	
	
	</script>
	';

?>