
<?php
	$myfilename = "ngtmQuizLogs" . date("Y-m") . ".txt";

	$myfile = fopen($myfilename, "a+") or die("Unable to open file!");
	$txt = date("Y-m-d h:i:sa"). "," . $_GET['q'] . "," . $_GET['u']  .  "\n";
	fwrite($myfile, $txt);
	fclose($myfile);

	echo $myfilename;
?>
