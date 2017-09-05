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


<div class="container-fluid generic-categories nopadding">

<div class="row main_top_promo" style="background-image:url(<?php echo $this->category->image; ?>); background-repeat:no-repeat; background-size:cover;">
 <img alt="<?php echo K2HelperUtilities::cleanHtml($this->category->name); ?>" src="<?php echo $this->category->image; ?>" class="img-responsive visible-sm visible-xs"/>
 <div  class="main_top_text zagori-blue visible-lg visible-md">
 <div class="main_top_text_title"><h1><?php echo $this->category->name; ?></h1></div>
 <div class="main_top_text_body"><?php echo $this->category->description; ?></div>
 </div>
</div>

<div class="row delta-nopadding">
<div  class="main_top_text_mob zagori-blue visible-sm visible-xs">
 <div class="main_top_text_title"><h1><?php echo $this->category->name; ?></h1></div>
 <div class="main_top_text_body"><?php echo $this->category->description; ?></div>
 </div>

<p class="visible-lg visible-md">&nbsp;</p>

</div>

<div class="row nopadding main-thumbs">





		<?php $ii=0;  if($this->params->get('subCategories') && isset($this->subCategories) && count($this->subCategories)):  ?>
		<!-- Leading items -->
		
			<?php foreach($this->subCategories as $key=>$subCategory): ?>

		
			
            <div class="visible-sm visible-xs"><p>&nbsp;</p></div>
            
            
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="col-md-12 col-lg-12 col-sm-6 col-xs-6 main-thumb">
            <?php if($this->params->get('subCatImage') && $subCategory->image): ?>
                  
                        <a href="<?php echo $subCategory->link; ?>" title="<?php echo K2HelperUtilities::cleanHtml($subCategory->name); ?>">
                            <img src="<?php echo $subCategory->image; ?>" alt="<?php echo K2HelperUtilities::cleanHtml($subCategory->name); ?>" class="img-responsive" />
                        </a>
                     
                 
                  <?php endif; ?>
            </div>
            <div class="col-md-12 col-lg-12 col-sm-6 col-xs-6">
            <p class="visible-lg visible-md"></p>
             <div class="main_top_thumb_title"><h3><?php echo $subCategory->name; ?></h3></div>
             <div class="visible-md visible-lg main_top_thumb_body">
             <?php if($this->params->get('subCatDescription')): ?>
                      
                    <?php
                    
                    
                    
                    
                    
                    $ss=$subCategory->description;
                    //echo substr($ss, 0, 190).'...';
                    echo mb_substr($ss,0,90, "utf-8").'...';
                    
                     ?>
                 
                  <?php endif; ?>
             </div>
             <div class="main-more-btn"><a href="<?php echo $subCategory->link; ?>" class="learn_more_btn"><?php echo JText::_('K2_VIEW_ITEMS'); ?></a></div>
            
            </div>
            </div>

            
            
            
            
            
            
            
				<?php
					
					$ii++;
					if($ii % 3==0){
						echo '<div class="clearfix">&nbsp;</div>';
					}
					
					
				?>
			
			
			<?php endforeach; ?>
			
		<?php endif; ?>



</div>



