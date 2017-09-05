<?php
/**
 * @version		$Id: default.php 565 2010-09-23 11:48:48Z joomlaworks $
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.gr
 * @copyright	Copyright (c) 2006 - 2010 JoomlaWorks, a business unit of Nuevvo Webware Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');
?>

<div class="minik2" id="minik2<?php echo $modid; ?>">

<?php 
$numofitems = count($items);
if($numofitems) 
{
	foreach ($items as $key=>$item) 
	{
	?>
          
		<div class="k2item block">
			<?php if ($item->image) { ?>
			<div class="thumbs-wrapper">
				<div class="thumbs">
					<a href="<?php echo $item->link; ?>">
						<img src="<?php echo $item->image; ?>" alt="<?php echo $item->title; ?>" class="box-img" />
					</a>
				</div>
			</div>
			<?php } ?>
			
			<h2 class="title"><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></h2>
			
			<?php if($params->get('itemDateCreated')) { ?>
			<!-- Date created -->
			<span class="itemDateCreated">
				<?php echo JHTML::_('date', $item->created , JText::_('DATE_FORMAT_LC3')); ?>
			</span>
			<?php } ?>
			
			<?php if($params->get('itemCategory')) { ?>
			<span class="itemCategory">
				<?php echo JText::_('K2_IN') ; ?> <a class="moduleItemCategory" href="<?php echo $item->categoryLink; ?>"><?php echo $item->categoryname; ?></a>
			</span>
			<?php } ?>
            
			<?php if($params->get('itemHits')) { ?>
			<span class="itemDateCreated">
				<?php echo $item->hits; ?> <?php echo JText::_('hits'); ?>
            </span>
			<?php } ?>
			
				
			<?php if($params->get('itemIntroText')) { ?>
				<div>
					<p class="minik2-simple-intro">
						<?php echo $item->introtext; ?>
					</p>
				</div>
			<?php } ?>
		
            <!-- Item Rating -->
				<?php if($params->get('itemVotesNumber') || $params->get('itemVotesNumber') ) { ?>
				<div class="minik2-simple-rating">
					<?php echo $item->voteVal; ?>
					&nbsp;from&nbsp;<?php echo ($item->numOfVotes==0)? '0': $item->numOfVotes; ?> <?php echo JText::_('votes'); ?>
					
					
				</div>            
				<?php } ?>
                
		</div>
		
	<?php } ?>
	
	<div class="clr"></div>
	
<?php } ?>
</div>
<!-- MiniK2 Joomla 3.0 module - Another Quality Freebie from TemplatePlazza.com -->