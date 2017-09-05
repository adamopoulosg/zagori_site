
<?php
ini_set('max_execution_time', 900); //300 seconds = 5 minutes
$zip = new ZipArchive;
$res = $zip->open('zagori_site.zip');
if ($res === TRUE) {
  $zip->extractTo('/var/www/vhosts/spotjwtdigital.gr/subdomains/zagori/httpdocs/');
  $zip->close();
  echo 'DONE!';
} else {
  echo 'ERROR!';
}

?>