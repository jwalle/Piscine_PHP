<?php
	include_once("Dice.class.php");
	$dice = new dice(1);
?>
<html>
<head>
<title>Dat board</title>
<link rel="stylesheet" type="text/css" href="board.css">
</head>
<body>

<h1>TyE boarde.</h1>

<table>

<script type="text/javascript">

var myArray    = new Array();
    myArray[0] = "1";
    myArray[1] = "2";
    myArray[2] = "3";
    myArray[3] = "4";
    myArray[4] = "5";



for (var j=0; j<100; j++) {
	document.write("<tr>");
	for (var i=0; i<150; i++) {
		document.write("<td>" + <?php echo $dice->roll(); ?>  + "</td>");
  	}
	document.write("</tr>");
}
</script>

</table>

</body>
</html>
