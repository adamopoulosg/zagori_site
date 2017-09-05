<?php
	$allowed = array(
		'zagoriwater2015'
	);
	$loggedIn = false;
	if(in_array($_POST['textfield9'],$allowed)):
		$loggedIn = true;
	endif;
	
?><!DOCTYPE html>
<html slick-uniqueid="3" prefix="og: http://ogp.me/ns#" lang="el-gr"><head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="description" content="Όχι απλά ένα νερό, Ζαγόρι!">
	<meta name="generator" content="Joomla! - Open Source Content Management">
	<title>Ζαγόρι, Φυσικό Μεταλλικό Νερό</title>
	
	<link rel="stylesheet" href="style.css" type="text/css">
</style>
<script src="jquery.js" type="text/javascript"></script>

</head>
<body>
    <section id="gkPageTop">
    	<img src="logo.png"/><h1>BUSINESS CORNER</h1>
	</section>
	<div id="gkPageContent" class="gkPage">
    	<section id="gkContent">					
			<section id="gkTop1" class="gkCols3">
				<?php if(!$loggedIn):?>
                <div class="bc_login">
	<form id="business-login" method="POST">
		<p>
			<label for="textfield9">PASSWORD:</label>
			<br>
			<input type="password" name="textfield9" id="textfield9" placeholder="Type the password">
		</p>
		<p><button id="bc_login_btn" class="button validate">ENTER</button></p>
		<?php if(isset($_POST['textfield9'])) { ?>
        <div class="bc_alert_red">Wrong Password Entered</div>
		<?php } ?>
	</form>
</div>
<?php else: ?>
	<div class="doclist">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <th width="100" colspan="2"><strong>Certificate  Management system as per DIN EN ISO 9001꞉2008</strong></th>
    </tr>
    <tr>
      <td colspan="2"><ul>
        <li><a href="files/ZAGORI-9001-GR.pdf" target="_blank">ZAGORI-9001-GR.pdf</a></li>
        <li><a href="files/ZAGORI-9001-EN.pdf" target="_blank">ZAGORI-9001-EN.pdf</a></li>
        <li><a href="files/ZAGORI-9001-FR.pdf" target="_blank">ZAGORI-9001-FR.pdf</a></li>
        <li><a href="files/ZAGORI-9001-DE.pdf" target="_blank">ZAGORI-9001-DE.pdf</a></li>
      </ul>      </td>
    </tr>
    <tr>
      <th colspan="2"><strong>Certificate  food safety management systems as per ELOT EN ISO 22000꞉2005</strong><br>
        Requirements for any organization in the  food chain</th>
    </tr>
    <tr>
      <td colspan="2"><ul>
        <li><a href="files/ZAGORI-22000-GR.pdf" target="_blank">ZAGORI-22000-GR.pdf</a></li>
        <li><a href="files/ZAGORI-22000-EN.pdf" target="_blank">ZAGORI-22000-EN.pdf</a></li>
        <li><a href="files/ZAGORI-22000-FR.pdf" target="_blank">ZAGORI-22000-FR.pdf</a></li>
        <li><a href="files/ZAGORI-22000-DE.pdf" target="_blank">ZAGORI-22000-DE.pdf</a></li>
      </ul></td>
    </tr>
    <tr>
      <th colspan="2"><strong>Certificate  Management system as per ELOT EN ISO 14001꞉2004</strong><br>
        Environmental Management  Systems-Requirements with guidance for use</th>
    </tr>
    <tr>
      <td colspan="2"><ul>
        <li><a href="files/ZAGORI-14001-GR.pdf" target="_blank">ZAGORI-14001-GR.pdf</a></li>
        <li><a href="files/ZAGORI-14001-EN.pdf" target="_blank">ZAGORI-14001-EN.pdf</a></li>
        <li><a href="files/ZAGORI-14001-FR.pdf" target="_blank">ZAGORI-14001-FR.pdf</a></li>
        <li><a href="files/ZAGORI-14001-DE.pdf" target="_blank">ZAGORI-14001-DE.pdf</a></li>
      </ul></td>
    </tr>
    <tr>
      <th colspan="2"><strong>Certificate  according IFS food</strong></th>
    </tr>
    <tr>
      <td colspan="2"><ul>
        <li><a href="files/CHITOS S.A.-IFS-2015.pdf" target="_blank">CHITOS S.A.-IFS-2015.pdf</a></li>
      </ul></td>
    </tr>
    <tr>
      <th colspan="2"><strong>Physicochemical  analyzes</strong></th>
    </tr>
    <tr>
      <td colspan="2"><ul>
        <li><a href="files/CHEMICAL ANALYSIS Kranoula_2015.pdf" target="_blank">CHEMICAL ANALYSIS Kranoula 2015 </a></li>
        <li><a href="files/CHEMICAL ANALYSIS Perivleptos_2015.pdf" target="_blank">CHEMICAL ANALYSIS Perivleptos 2015</a></li>
      </ul>      </td>
    </tr>
    <tr>
      <th colspan="2"><strong>Technical  product specifications</strong></th>
    </tr>
    <tr class="secclass">
      <td width="50%">PET Products</td>
      <td width="50%">RGB Products</td>
    </tr>
    <tr>
      <td align="left" valign="top"><ul>
        <li><a href="files/0,33lt_Pet_zagoraki.pdf" target="_blank">0,33lt Pet Zagoraki</a></li>
        <li><a href="files/0,5lt_Pet_ 24pack.pdf" target="_blank">0,5lt Pet  24 Pack</a></li>
        <li><a href="files/0,5lt_Pet_12pack.pdf" target="_blank">0,5lt Pet 12 Pack</a></li>
        <li><a href="files/0,75lt_Pet_12pack.pdf" target="_blank">0,75lt Pet 12 Pack</a></li>
        <li><a href="files/0,75lt_Pet_athletic.pdf" target="_blank">0,75lt Pet Athletic</a></li>
        <li><a href="files/1,0lt_Pet_Carton.pdf" target="_blank">1,0lt Pet Carton</a></li>
        <li><a href="files/1,5lt_Pet_(5+1)pack.pdf" target="_blank">1,5lt Pet (5+1) Pack</a></li>
        <li><a href="files/1,5lt_Pet_6pack.pdf" target="_blank">1,5lt Pet 6pack</a></li>
        <li><a href="files/1,5lt_Pet_Carton.pdf" target="_blank">1,5lt Pet Carton</a></li>
        <li><a href="files/5lt_Pet_2pack.pdf" target="_blank">5lt Pet 2 Pack</a></li>
      </ul></td>
      <td align="left" valign="top"><ul>
        <li><a href="files/0,25lt CO2_RGB.pdf" target="_blank">0,25lt CO2 RGB</a></li>
        <li><a href="files/0,25lt_RGB.pdf" target="_blank">0,25lt RGB</a></li>
        <li><a href="files/0,33lt CO2_RGB.pdf" target="_blank">0,33lt CO2 RGB</a></li>
        <li><a href="files/0,75lt CO2_RGB_Carton.pdf" target="_blank">0,75lt CO2 RGB Carton</a></li>
        <li><a href="files/1lt_RGB_Carton.pdf" target="_blank">1lt RGB Carton</a></li>
        <li><a href="files/1lt_RGB_Plastic.pdf" target="_blank">1lt RGB Plastic</a></li>
      </ul></td>
    </tr>
  </tbody>
</table>

    </div>
<?php endif; ?>
		  </section>			
		</section>
	</div>
	<footer id="gkFooter" class="gkPage">
		<p class="gkCopyrights">Copyright © 2015 ΧΗΤΟΣ ΑΒΕΕ / CHITOS SA, All rights reserved.
			<br>
		12 χλμ. Ιωαννίνων – Κόνιτσας, 455 00 Ιωάννινα | τηλ. 26510 61843, 2651085033-4, fax. 2651037074</p>
	</footer>
</body>
</html>