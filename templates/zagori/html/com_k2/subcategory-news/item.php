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
  
 </div>
 <div  class="main_top_text zagori-white visible-lg visible-md" >
 <?php if($this->item->params->get('itemImage') && !empty($this->item->image)): ?>
		<!-- Item Image -->
		<div class="itemImage">
			
				
					<img src="<?php echo $this->item->image; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" style="margin:0 auto;" class="img-responsive" />
				
			

			
		</div>
		<?php endif; ?>
 
 <div class="main_top_text_body blacktxt" >
 
 <div class="main_top_text_title bluetxt"><h3><?php echo $this->item->title; ?></h3></div>

 <?php if($this->item->params->get('itemDateCreated')): ?>
	<!-- Date created -->
    <p>
	<span class="itemDateCreated">
		<em><?php echo JHTML::_('date', $this->item->created , JText::_('K2_DATE_FORMAT_LC')); ?></em>
	</span>
    </p>
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
        
        
        
        
        
        
        
        
        
        
        
        </div>
 </div>
</div>

<div class="row ">
<div  class="main_top_text_mob zagori-white  visible-sm visible-xs">
 <div class="main_top_text_title bluetxt"><h4><?php echo $this->item->title; ?></h4></div>

 <?php if($this->item->params->get('itemImage') && !empty($this->item->image)): ?>
		<!-- Item Image -->
		<div class="main_top_inner_image">
			
				
					<img src="<?php echo $this->item->image; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" class="img-responsive" />
				
			

			
		</div>
		<?php endif; ?>

 <div class="main_top_text_body  blacktxt">
 <?php if($this->item->params->get('itemDateCreated')): ?>
	<!-- Date created -->
	<span class="itemDateCreated">
		<?php echo JHTML::_('date', $this->item->created , JText::_('K2_DATE_FORMAT_LC2')); ?>
	</span>
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
        		
       
       
      
       
       
       
       		<?php
			$imag='images/generic.jpg';
			
			if($item->image){
			$imag=$item->image;	
			}
			
			
			
			 if($this->item->params->get('itemRelatedImageSize')): ?>
				
                
                
                <div class="slide" >
                <div >
                <a class=""  href="<?php echo $item->link; ?>"  title="<?php echo $item->title; ?>" ><img class="img-responsive" src="<?php echo $imag; ?>" alt="<?php echo $item->title; ?>" /></a>
                <div class="main_top_thumb_title">
                <?php if($this->item->params->get('itemRelatedTitle', 1)): ?>
                <h3><?php echo $item->title ?></h3>
                <?php endif; ?>
                </div>
                     <div class="visible-md visible-lg main_top_thumb_body">
                     <?php if($this->item->params->get('catItemIntroText')): ?>
                              
                            <?php //echo $this->item->introtext;
                            
                            
                            
                            
                            
                            $ss=$item->introtext; 
                            //echo substr($ss, 0, 100).'...';
                            echo mb_substr($ss,0,70, "utf-8").'...';
                             ?>
                         
                          <?php endif; ?>
                     </div>
                     <div class="main-more-btn"><a href="<?php echo $item->link; ?>"  class="learn_more_btn"><?php echo JText::_('K2_VIEW_ITEMS'); ?></a></div>
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