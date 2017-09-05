<?php
/**
 * @version		$Id: default.php 565 2010-09-23 11:48:48Z schro $
 * @package		Mini K2
 * @subpackage	thumbnail proximity sub template
 * @author	    TemplatePlazza http://www.templateplazza.com
 * @copyright	Copyright (c) 2007 - 2012 TemplatePlazza, web developement and design marketplace. All rights reserved.
 * @copyright	Copyright (c) 2012 Tympanus http://tympanus.com/codrops/
 * @copyright	Copyright (c) 2006 - 2012 JoomlaWorks, a business unit of Nuevvo Webware Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');
?>

<div id="pe-wrapper">
<ul id="pe-thumbs" class="pe-thumbs">

    <?php 
    $count=1;
    foreach ($items as $key=>$item){	
    ?>
    <li>
        
        <a href="<?php echo $item->link; ?>">
			<img src="<?php echo resizeImageHelper::getResizedImage('/'.$item->image, $tmbWidth, $tmbHeight, $option); ?>" alt="<?php echo $item->title; ?>" style="height:<?php echo $tmbHeight; ?>px; width:<?php echo $tmbWidth; ?>px" />
			            
			<div class="pe-description">
                <h3><?php echo $item->title; ?></h3>
                <p>
                <?php if($params->get('itemIntroText')) { ?>
                    <?php echo $item->introtext; ?>
                <?php } ?>
                </p>
            </div>
            
        </a>
    </li>
    <?php 
        $count++;
    } 
    ?>
</ul>
<div style="clear:both;"></div>
</div>
<!-- MiniK2 Joomla 3.0 module - Another Quality Freebie from TemplatePlazza.com -->