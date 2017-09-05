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

echo '
<script>
var win_height_padded=0;
(function($) {

$(window).ready(function(e) {
	
	home_resizeme();
	 $(window).resize(function(e) {
       
		home_resizeme();
   	 });
	 
	 
	$(window).scroll(function() {
   myscroll();
	});
	 myscroll();

});







function myscroll(){
	
	var scrolled = $(window).scrollTop();
	
	
	
    /*jQuery(".revealOnScroll:not(.animated)").each(function () {
        var offsetTop = jQuery(this).offset().top;
  
        if (scrolled + win_height_padded > offsetTop) {
          if (jQuery(this).data("timeout")) {
            window.setTimeout(function(){
             jQuery(this).addClass("revealOnScrollanim animated " + jQuery(this).data("animation"));
           }, parseInt(jQuery(this).data("timeout"),10));
         } else {
           jQuery(this).addClass("revealOnScrollanim animated " + jQuery(this).data("animation"));
         }
       }
	   });*/
	   
	
    $(".revealOnScroll:not(.animated)").each(function () {
        var $this     = $(this),
           offsetTop = $this.offset().top;
  
        if (scrolled + win_height_padded > offsetTop) {
          if ($this.data("timeout")) {
            window.setTimeout(function(){
             $this.addClass("revealOnScrollanim animated " + $this.data("animation"));
           }, parseInt($this.data("timeout"),10));
         } else {
           $this.addClass("revealOnScrollanim animated " + $this.data("animation"));
         }
       }
	   });
	

	   
	   
	   
}




function home_resizeme(){
var width1=$(window).innerWidth();
var	height1=$(window).innerHeight();

		if(width1<400){
		win_height_padded = height1 * 100;
		}else if(width1>400 && width1<800){
			win_height_padded = height1 * 2;
		}else{
			win_height_padded = height1 * 1.1;
		}
		
		
		
		
		var titlefont=factor*1.3*70;
		if(titlefont>44){
			titlefont=44;
		}
		var descfont=factor*25;
		if(descfont>16){
			descfont=16;
		}
		
		
		
		var learnfont=factor*25;
		if(learnfont<16){
			learnfont=16;
		}
		
		
		
		var more_width=factor*1.7*320;
		if(more_width>200){
			more_width=200;
		}
		
		
		jQuery(".home_promo").width(factor*1920);
		jQuery(".home_promo").height(factor*1128);
		
		jQuery(".home-title").css("font-size",titlefont+"px");
		
		
		jQuery(".home-desc").css("font-size",descfont+"px");
		
		
		jQuery(".home-desc").css("margin-top",factor*10+"px");
		jQuery(".home-title").css("padding-left",factor*30+"px");
		jQuery(".home-desc").css("padding-left",factor*30+"px");
		jQuery(".learn_more_btn").css("margin-left",factor*20+"px");
		jQuery(".learn_more_btn").css("margin-top",factor*40+"px");
		jQuery(".learn_more_btn").css("font-size",learnfont+"px");
		
		
		var margin=((factor*600)-(jQuery(".home-title").height()+jQuery(".home-desc").height()+parseInt(jQuery(".home-desc").css("margin-top"))+jQuery(".home-more-btn").height()+parseInt(jQuery(".home-more-btn").css("margin-top"))))/2;
		
		jQuery(".home-title").css("margin-top",margin+"px");
		
		
		
		jQuery(".top_pic").width((descfont/16)*559);
		
		jQuery(".top_desc").css("max-width",(descfont/16)*725+"px");
		jQuery(".top_desc").css("font-size",descfont+"px");
		jQuery(".home-top-more-btn").css("margin-top",factor*40+"px");
		jQuery(".home-top-more-btn").width(more_width);
		//jQuery(".home_promo_title").css("top",factor*750+"px");
		jQuery(".home_promo_title").css("left",(width-jQuery(".home_promo_title").width())/2+"px");



}











 })(jQuery);
</script>
';

?>

<?php if($this->params->get('subCategories') && isset($this->subCategories) && count($this->subCategories)): ?>
		<!-- Subcategories -->
		<div class="container-fluid homecategories nopadding">
			
 			
    			
				<?php $ii=0; foreach($this->subCategories as $key=>$subCategory): ?>
                
                
               
               <?php  if($ii % 2==0){   ?>
               
               		<div class="row nopadding">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 nopadding home-section-image revealOnScroll " data-animation="fadeInLeft" data-timeout="200"> <img alt="<?php echo K2HelperUtilities::cleanHtml($subCategory->name); ?>" src="<?php echo $subCategory->image; ?>" class="img-responsive "/></div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 home-section nopadding">
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 home-title revealOnScroll" data-animation="fadeInRight" data-timeout="100"><?php echo $subCategory->name; ?></div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 home-desc visible-lg visible-md revealOnScroll" data-animation="fadeInRight" data-timeout="300"><?php echo $subCategory->description; ?></div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 home-more-btn revealOnScroll" data-animation="fadeInRight" data-timeout="500"><a href="<?php echo $subCategory->link; ?>" class="learn_more_btn"><?php echo JText::_('K2_VIEW_ITEMS'); ?></a></div>
                    
                    </div>
                    
                    
                    </div>
               
               <?php  }else{   ?>
               
               
               <div class="row nopadding">

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 home-section nopadding">
                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 home-title revealOnScroll" data-animation="fadeInLeft" data-timeout="100"><?php echo $subCategory->name; ?></div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 home-desc visible-lg visible-md revealOnScroll" data-animation="fadeInLeft" data-timeout="300"><?php echo $subCategory->description; ?></div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 home-more-btn revealOnScroll" data-animation="fadeInLeft" data-timeout="500"><a href="<?php echo $subCategory->link; ?>" class="learn_more_btn"><?php echo JText::_('K2_VIEW_ITEMS'); ?></a></div>
                
                </div>
                
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 nopadding home-section-image revealOnScroll" data-animation="fadeInRight" data-timeout="200"><img alt="<?php echo K2HelperUtilities::cleanHtml($subCategory->name); ?>" src="<?php echo $subCategory->image; ?>" class="img-responsive "/></div>
                
                </div>  
               
               
               
               
               
               
               
               
               <?php  }   ?>
               
               <?php  $ii++;   ?>
                
               
                
               
                
    
                        
                
                <?php endforeach; ?>
		 	
			
		</div>
		<?php endif; ?>












		