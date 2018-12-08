<?php
session_start();
	$strId=$_POST["id"];
	$strShimei=$_POST["shimei"];
	$strEmail=$_POST["email"];
	//----------------------必須入力チェック----------------------

//----------------------DB存在チェック----------------------
$cn=mysql_connect("localhost","root","root");
$db=mysql_select_db("dele1",$cn);
$id=mysql_real_escape_string($_POST["id"]);
$result=mysql_query("select * from kokyaku where id = \"$id\";");
if(mysql_num_rows($result)){//
	if(!empty($_POST["touroku"])){//
			
			header("Location: ie.php".SID);
			mysql_free_result($result);//
			mysql_close($cn);//
			exit;
	}
}

?>

<html>
<head>
	<meta http-equiv="Content-type"content="text/html;charset=UTF-8">
	<title>kadai3-3</title>
</head>

<body>
<?php
	
	$result = mysql_query("SELECT * FROM kokyaku");
	while($row = mysql_fetch_array($result)){
		echo"名前：".$row["id "]. "名前：".$row["shimei"]."記入：".$row["email"]."<br>";
	}
	?>

</body>
</html>