<?php
	$done = $_REQUEST['done'];
	$close = "document.getElementById('error').style.display='none';";
	$closeOver = "document.getElementById('close').innerHTML='Close';";
	$closeOut = "document.getElementById('close').innerHTML='X';";
	$errorStart = "<div id='error' onclick=". $close." onmouseover=". $closeOver." onmouseout=".$closeOut.">";
	$errorEnd = " <span id='close'>X</span> </div>";
?>
<?php
	if ($done == 'no' || $done == 'n' || $done == 'yes' || $done == 'y') {
		echo $errorStart . "Complete the following assignment sheet" . $errorEnd;
	}
	elseif ($done != 'yes') {
		echo $errorStart . "Complete at least one column" . $errorEnd;
	}
?>