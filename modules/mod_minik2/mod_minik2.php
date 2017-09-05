<?php
/**
 * @version		$Id: mod_minik2.php 1171 2011-12-17 11:32:15Z schro $
 * @package		Mini K2
 * @author		TemplatePlazza http://www.templateplazza.com + JoomlaWorks http://www.joomlaworks.gr
 * @copyright	Copyright (c) 2006 - 2011 TemplatePlazza.com. All rights reserved.
 * @copyright	Copyright (c) 2006 - 2011 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');
if(!defined('TP_DS')) {
    define( 'TP_DS', DIRECTORY_SEPARATOR );
}

if(K2_JVERSION != '15'){
	$language = JFactory::getLanguage();
	$language->load('mod_minik2.j16', JPATH_ADMINISTRATOR, null, true);
}

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';
require_once __DIR__ . '/image.php';

$modulebase		= ''.JURI::base(true).'/modules/mod_minik2/';
$doc			= JFactory::getDocument();


// Get Params
$moduleclass_sfx 	= $params->get('moduleclass_sfx','');
$getTemplate 		= $params->get('getTemplate', 'simple');
$option 			= $params->get( 'option', 'crop');
if( ($getTemplate=='Default') || ($getTemplate=='default') ) { $getTemplate = 'simple'; }

// Get component params
$k2Params = JComponentHelper::getParams('com_k2');
$modid	= $module->id;

switch ( $getTemplate ) {
	
	case 'portfolio':
        //$origImgWidth = $k2Params->get('itemImageXL', '');
               
        $tmbWidth = $params->get('imgWidth', 220);
        $tmbHeight = $params->get('imgHeight', 150);
        $cropWidth = $tmbWidth/100; $cropHeight = $tmbHeight/100;
        $itemTitleFontSize = $params->get('titleFontSize', '22');
        
        $doc->addStyleSheet($modulebase.'tmpl/'.$getTemplate.'/assets/portfolio.css');
        $inlinecss = "
            #folio-container li { width:".$tmbWidth."px; height:".$tmbHeight."px; }
            #stage li a img {width:".$tmbWidth."px;height:".$tmbHeight."px;}
            #stage li a .description {width:". ($tmbWidth - 20) ."px;}
            #stage li a:hover .description {height:". ($tmbHeight-40) ."px;}
            #stage li a .description h3 {font-size:".$itemTitleFontSize."px;line-height:". ($itemTitleFontSize+2) ."px;font-weight:500;}
            #stage li a .description p {font-size:".intval($itemTitleFontSize * 0.6)."px;line-height:".intval($itemTitleFontSize*0.6+2)."px;}
        ";
        $doc->addStyleDeclaration($inlinecss, 'text/css');
        
        $doc->addScript($modulebase.'tmpl/'.$getTemplate.'/assets/jquery.quicksand.js');
        $doc->addScript($modulebase.'tmpl/'.$getTemplate.'/assets/script.js');
        
        $script = "var WORD_FILTER_BY = '".JText::_('MOD_MINIK2_FILTERBY')."';";
        $script .= "var WORD_EVERYTHING = '".JText::_('MOD_MINIK2_ALL')."';";
        
        $doc->addScriptDeclaration($script);
        
        break;
        
    case 'thumbnail-proximity':
        
		$maxScale = $params->get('maxScale', 1.2);
        $itemTitleFontSize  = $params->get('titleSize', '22');
        
		$tmbWidth = $params->get('imgWidtht', 220);
        $tmbHeight = $params->get('imgHeightt', 150);
        $cropWidth = $tmbWidth/100; $cropHeight = $tmbHeight/100;
                
        $doc->addStyleSheet($modulebase.'tmpl/'.$getTemplate.'/assets/thumbeffect.css');
        $inlinecss ='
            .pe-thumbs li a img{width:'.$tmbWidth.'px;height:'.$tmbHeight.'px;}
            .pe-description h3 {font-size:'.$itemTitleFontSize.'px;line-height:'. ($itemTitleFontSize+2) .'px;}
        ';
        $doc->addStyleDeclaration($inlinecss, 'text/css');
		
        $doc->addScript($modulebase.'tmpl/'.$getTemplate.'/assets/jquery.proximity.js');
        /* The following js are from http://tympanus.com/codrops/ tutorial on thumbnail proximity */
        $inlinejs = 'var $maxScale='.$maxScale;
        $doc->addScriptDeclaration($inlinejs);
        $doc->addScript($modulebase.'tmpl/'.$getTemplate.'/assets/proximity.js');
                
        break;
		
	case 'simple': 
    //case 'default':
    default:
    
		$blockWidth = (int) $params->get('blockWidth', 200);
		$itemTitleFontSize = $params->get('titleFontSize', '22');
		
		$style = ".minik2 .k2item.block {width:".$blockWidth."px;}
				.minik2 .k2item h2.title {font-size:".$itemTitleFontSize."px;}
				";
		$doc->addStyleSheet($modulebase.'tmpl/'.$getTemplate.'/assets/simple.css');
		$doc->addStyleDeclaration($style, 'text/css');
        
        $jqcodes = '
            /* Masonry */
			jQuery.noConflict();
			jQuery(window).load(function(){
			
				var $container = jQuery("#minik2'.$modid.'");
				$container.imagesLoaded(function(){
					$container.masonry({
						itemSelector : \'.block\'
					});
				}) 
			});

            
            jQuery(document).ready(function(){
            	jQuery(".block").hover(function () {             
            		jQuery(this).siblings().stop().animate({opacity: 0.2}, "fast");   
            	},
            	function () {      
            		jQuery(".block").stop().animate({opacity: 1.0}, "fast");       
            	});
            });
			
        ';
		$doc->addScript($modulebase.'tmpl/'.$getTemplate.'/assets/jquery.masonry.min.js');
		$doc->addScriptDeclaration($jqcodes, 'text/javascript');
		break;
		
	case 'newsticker':
		$modid		= $module->id;
        $boxWidth 		= (int) $params->get('width', 350);
		$boxHeight 		= (int) $params->get('height', 30);
		$tickerboxWidth = ( $params->get('showControls', 0) ) ? $boxWidth - 70 : $boxWidth;
		
        $boxwrpstyle = "
        	.ticker-wrapper.has-js {width:".$boxWidth."px; height:".$boxHeight."px;}
        	.ticker{width:".$tickerboxWidth."px; height:".$boxHeight."px;}
            .ticker-swipe {width:".$tickerboxWidth."px;}
        	";
		
		$doc->addStyleSheet($modulebase.'tmpl/'.$getTemplate.'/assets/newsticker.css');
		$doc->addStyleDeclaration($boxwrpstyle, 'text/css');
		$doc->addScript($modulebase.'tmpl/'.$getTemplate.'/assets/jquery.ticker.js');
		
		$showTitle 		= $params->get('showTickerTitle', 0);
		$titleText 		= ( $showTitle ) ? $params->get('tickerTitleText', '') : '';

		$showDate 		= (int) $params->get('showDate', 0);
		$dateFormat 	= $params->get('dateFormat', 'm/d/y');

		$controls 		= ( $params->get('showControls', 0) ) ? 'true' : 'false';
		$displayType 	= $params->get('displayType', 'fade');
		$speed 			= $params->get('speed', 0.10);
		$pauseOnItems	= $params->get('pauseOnItems', 2000);
		$fadeInSpeed	= $params->get('fadeInSpeed', 600);
		$fadeOutSpeed	= $params->get('fadeOutSpeed', 300);
		
		$jqcodes = "
			jQuery.noConflict();
	
        	jQuery( function () {
        		// start the ticker 
        		jQuery('#tp-newsticker').ticker( {
        			speed: ". $speed .",
        			controls: ". $controls .",
        			titleText: '". $titleText ."',
        			displayType: '". $displayType ."',
        			pauseOnItems: ". $pauseOnItems .",
        			fadeInSpeed: ". $fadeInSpeed .",
        			fadeOutSpeed: ". $fadeOutSpeed ."
        		} );
        	});
		";
		$doc->addScriptDeclaration($jqcodes);
		
		break;
} // end switch case sub template


$itemCustomLinkTitle = $params->get('itemCustomLinkTitle','');
if($params->get('itemCustomLinkMenuItem')) {
	$menu = JMenu::getInstance('site');
	$menuLink = $menu->getItem($params->get('itemCustomLinkMenuItem'));
	if(!$itemCustomLinkTitle){
		$itemCustomLinkTitle = (K2_JVERSION != '15') ? $menuLink->title : $menuLink->name;
	}
	$params->set('itemCustomLinkURL', JRoute::_($menuLink->link.'&Itemid='.$menuLink->id));
}

$categories = modMiniK2Helper::getCategories($params );
$items = modMiniK2Helper::getItems($params);

if(count($items)) {
	//require(JModuleHelper::getLayoutPath('mod_minik2', $getTemplate . DS . 'default') );
	require dirname(dirname(JModuleHelper::getLayoutPath('mod_minik2'))).TP_DS.'tmpl'.TP_DS.$getTemplate.TP_DS.'default.php';
} else {
    echo '<p class="info">Please check your setting to get the items or maybe you need to write your K2 items first.</p>';
}
