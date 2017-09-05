<?php defined( '_JEXEC' ) or die;

// variables
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$menu = $app->getMenu();
$active = $app->getMenu()->getActive();
$params = $app->getParams();
$pageclass = $params->get('pageclass_sfx');
$tpath = $this->baseurl.'/templates/'.$this->template;
$rootpath=$this->baseurl;

// generator tag
$this->setGenerator(null);





// template js
$doc->addScript($tpath.'/js/bootstrap.js');
//$doc->addScript($tpath.'/js/sweetalert.min.js');
//$doc->addScript($tpath.'/js/zepto.min.js');
// template js

$doc->addStyleSheet($tpath.'/js/colorbox/colorbox.css');
$doc->addStyleSheet($tpath.'/css/vegas.min.css');
$doc->addScript($tpath.'/js/colorbox/jquery.colorbox.js');
$doc->addScript($tpath.'/js/vegas.min.js');
  $doc->addStyleSheet('https://fonts.googleapis.com/css?family=Raleway:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i&subset=latin-ext');
   $doc->addStyleSheet('https://fonts.googleapis.com/css?family=Open+Sans');
      $doc->addStyleSheet('https://fonts.googleapis.com/css?family=Jura:300,400,500,600&subset=greek,latin-ext');

  $doc->addScript($tpath.'/js/imagesloaded.pkgd.min.js');
  //$doc->addScript($tpath.'/js/masonry.pkgd.min.js');
   $doc->addScript($tpath.'/js/jquery.easing.1.3.js');
$doc->addScript($tpath.'/js/jquery.easing.compatibility.js');
  $doc->addScript($tpath.'/js/jquery.bxslider.min.js');


// template js
$doc->addScript($tpath.'/js/logic.js');



// template css
$doc->addStyleSheet($tpath.'/css/template.css.php');
