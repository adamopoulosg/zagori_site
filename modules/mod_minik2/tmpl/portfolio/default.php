<?php
/**
 * @version		$Id: default.php 565 2010-09-23 11:48:48Z schro $
 * @package		Mini K2
 * @subpackage	Portfolio with quicksand sorting sub template
 * @author	    TemplatePlazza http://www.templateplazza.com
 * @copyright	Copyright (c) 2007 - 2012 TemplatePlazza, web developement and design marketplace. All rights reserved.
 * @copyright	Copyright (c) 2011 tutorialzine.com
 * @copyright	Copyright (c) 2006 - 2012 JoomlaWorks, a business unit of Nuevvo Webware Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');
?>

<div id="filter"></div>

<div id="folio-container">
    
    <ul id="stage">
    
    <?php 
    foreach ($items as $key=>$item){
    ?>
        <li data-type="<?php echo $item->categoryname; ?>">
            <a href="<?php echo $item->link; ?>">
                <img src="<?php echo resizeImageHelper::getResizedImage('/'.$item->image, $tmbWidth, $tmbHeight, $option); ?>" alt="<?php echo $item->title; ?>" style="height:<?php echo $tmbHeight; ?>px; width:<?php echo $tmbWidth; ?>px" />
				            
                <div class="description">
                    <h3><?php echo $item->title; ?></h3>
                    <p><?php if($params->get('itemIntroText')) { echo $item->introtext; } ?></p>
                </div>
            </a>
        </li>
    <?php } ?>
    </ul>
</div>
    
<!-- MiniK2 Joomla 3.0 module - Another Quality Freebie from TemplatePlazza.com -->