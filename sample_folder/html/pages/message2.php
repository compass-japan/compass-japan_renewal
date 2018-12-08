
<?php
	
$cn=mysql_connect("localhost","root","root");
$db=mysql_select_db("mes",$cn);

if(!empty($_POST["shimei"])){

$result = mysql_query("INSERT INTO mes(shimei,mes) VALUE(\"$_POST[shimei]\",\"$_POST[mes]\")",$cn);
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
<font size="5"><p align="center">------------------------------------------------<br></font>
<font size="5" color="red"><b>メッセージ一覧</b></font><br>
<font size="5">------------------------------------------------</p></font>
	<!--メッセージ表示-->
	<p align="left">
	<?php
	mb_internal_encoding("UTF-8");
	mysql_set_charset('utf8');
	$result = mysql_query("SELECT * FROM mes",$cn);
	$i=0;
	while($row = mysql_fetch_array($result)){
	
	echo "---------------------------------------------------------------------------<br>【投稿者】：".$row["shimei"]."<br>【メッセージ】：".$row["mes"]."<br>---------------------------------------------------------------------------<br>";
	$i++;
	}

	?>
	</p>

</body>
</html>
