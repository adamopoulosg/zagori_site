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





		<?php $ii=0; if(isset($this->leading) && count($this->leading)): ?>
		<!-- Leading items -->
		
			<?php foreach($this->leading as $key=>$item): ?>

		
			
				<?php
					// Load category_item.php by default
					echo '<div class="visible-sm visible-xs"><p>&nbsp;</p></div>';
					$this->item = $item;
					echo $this->loadTemplate('item');
					$ii++;
					if($ii % 3==0){
						echo '<div class="clearfix">&nbsp;</div>';
					}
					
					
				?>
			
			
			<?php endforeach; ?>
			
		<?php endif; ?>



</div>



