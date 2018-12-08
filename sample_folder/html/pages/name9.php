<!--
<?php
	
$cn=mysql_connect("localhost","root","root");
$db=mysql_select_db("name4",$cn);
if(!empty($_POST["shimei"])){

$result = mysql_query("INSERT INTO name4(shimei) VALUE(\"$_POST[shimei]\"",$cn);
	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>メッセージ</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../pages/common.css" rel="stylesheet" type="text/css" />
	
</head>

<body>

	<!--メッセージ表示
	<p align="left">
	<?php

	$result = mysql_query("SELECT * FROM name4",$cn);
	$i=0;
	while($row = mysql_fetch_array($result)){
	
	echo $row["shimei"];
	$i++;
	}

	?>
	</p>

</body>
</html>-->
