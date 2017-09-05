<?php defined( '_JEXEC' ) or die;

include_once JPATH_THEMES.'/'.$this->template.'/logic.php';

?><!doctype html>

<html lang="<?php echo $this->language; ?>">

<head>
  <jdoc:include type="head" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">
  <link rel="icon" href="<?php echo $tpath; ?>/favicon.ico">

  <script type='text/javascript'>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-46813218-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>


</head>
  <?php

  $margin='';
  if (strpos($active->alias, 'home') !== false) {
    $margin='style="margin-top:0px;"';
}
  ?>
<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site')).' '.$active->alias.' '.$pageclass; ?>">


 <!-- main container -->
    <div class='container-fluid main-container nopadding'>


     <div class="row nopadding topheader">
                 <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 nopadding">


                  <table width="100%">
                              <tbody>
                              <tr><td align="left">
                              <a href="<?php echo $rootpath; ?>" title="ZAGORI"><img src="<?php echo $tpath; ?>/images/logo.png" class="img-responsive nopadding" /></a>
                              <jdoc:include type="modules" name="lang-switch" />
                              </td></tr>
                              </tbody>
                              </table>

                 

                 </div>

                 <div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">


                  <nav class="navbar navbar-default mainmenu" role="navigation">



                              <div class="container-fluid nopadding">
                                <div class="navbar-header">
                                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>

                                </div>
                                <div id="navbar" class="navbar-collapse collapse ">



                                 <jdoc:include type="modules" name="menu" />
                             <!-- <ul class="nav navbar-nav navbar-right">




                                  </ul>-->
                                </div>
                              </div>
                            </nav>
                          <!-- end menu -->







                 </div>

     </div>





  	 <div class="row nopadding">
    	<!--<div class="home-bg-slider" style=""><jdoc:include type="modules" name="home-bg-slider" /></div>-->





       <jdoc:include type="modules" name="content-top" />
       <jdoc:include type="component" />
       <jdoc:include type="modules" name="content-bottom" />



   </div>







  		 <div class="row nopadding footer" <?php echo $margin; ?>>
           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 nopadding" ><jdoc:include type="modules" name="footer-social" /></div>
           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 nopadding" ><jdoc:include type="modules" name="subscribe" /></div>

             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 nopadding" >
             <table align="right"><tbody><tr><td><jdoc:include type="modules" name="footer-info" /></td></tr></tbody></table>


             </div>
         </div>














  </div>


























  <script type="text/javascript">
    (function($){
        $(document).ready(function(){




        });
    })(jQuery);
</script>

  <jdoc:include type="modules" name="debug" />
</body>

</html>
