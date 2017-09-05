<?php
/**
 * @version		$Id: default.php 565 2010-09-23 11:48:48Z schro $
 * @package		MiniK2
 * @subpackage  MiniK2 Newsticker layout
 * @author      Based on JQuery News Ticker script http://www.jquerynewsticker.com/
 * @author		templateplazza http://www.templateplazza.com
 * @author		JoomlaWorks http://www.joomlaworks.gr
 * @copyright	Copyright (c) 2007 - 2011 TemplatePlazza, a web development stuffs marketplace
 * @copyright	Copyright (c) 2006 - 2010 JoomlaWorks, a business unit of Nuevvo Webware Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

?>
<div id="tp-tickerwrp">
	<ul id="tp-newsticker" class="js-hidden">
		
		<?php foreach ($items as $item) : ?>
		<li class="news-item">
			<?php
			if( $params->get('itemDateCreated') ) {
				//echo JHTML::_('date', $item->created , $dateFormat);
				echo date($dateFormat, strtotime($item->created));
				echo '&nbsp;';
			}
			?>
			<a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a>
		</li>
		<?php endforeach; ?>
	</ul>
	<div class="clrfix"></div>

</div>

<!-- MiniK2 Joomla 3.0 module - Another Quality Freebie from TemplatePlazza.com -->
