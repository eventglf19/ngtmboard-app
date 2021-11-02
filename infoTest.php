<html>
<head><title>PHP Mail Sender</title></head>
<body>

<?php

	$myfile = fopen("ngtmQuizLogs.txt", "a+") or die("Unable to open file!");
	$txt = date("Y-m-d h:i:sa"). "," . $_GET['q'] . "," . $_GET['u']  .  "\n";
	fwrite($myfile, $txt);
	fclose($myfile);

	echo "done";
?>

</body>
</html>