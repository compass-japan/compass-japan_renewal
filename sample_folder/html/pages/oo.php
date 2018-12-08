<?php
session_start();
	$strId=$_POST["id"];
	$strShimei=$_POST["shimei"];
	$strEmail=$_POST["email"];
	//----------------------必須入力チェック----------------------
	if(empty($strId)){
		$strErr="IDは必須入力です。<br>";
	}
	if(!empty($_POST["touroku"])){
		if(empty($strShimei)){
			
			$strErr.="名前は必須入力です。";
	}
	$_SESSION["id"]=$strId;
	$_SESSION["shimei"]=$strShimei;
	$_SESSION["email"]=$strEmail;
	$_SESSION["strErr"]=$strErr;
	if(!empty($strErr)){
		$SESSION["err"]=$strErr;
		header("Location:ie.php".SID);
		exit;
	}
}
//----------------------DB存在チェック----------------------
$cn=mysql_connect("localhost","root","root");
$db=mysql_select_db("dele",$cn);
$id=mysql_real_escape_string($_POST["id"]);
$result=mysql_query("select * from kokyaku where id = \"$id\";");
if(mysql_num_rows($result)){//
	if(!empty($_POST["touroku"])){//
			$_SESSION["err"]="登録済みのIDです。変更してください。";
			header("Location: ie.php".SID);
			mysql_free_result($result);//
			mysql_close($cn);//
			exit;
	}else{//削除ボタンが押されたら
		
			$result = mysql_query("DELETE FROM kokyaku WHERE id = '$id'");
		}
	}else{
		if(!empty($_POST["sakujo"])){
			$_SESSION["err"] = "削除対象のIDが存在しません。IDを変更してください。";
			header("Location: oo.php?".SID);
			mysql_free_result($result);
			mysql_close($cn);
			exit;
		}else{
			$result = mysql_query("INSERT INTO kokyaku(id,shimei,email) VALUE(\"$id\",\"$strShimei\",\"$strEmail\")",$cn);
			
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
	if(!empty($_POST["touroku"])){
		echo "＜登録完了＞<br>";
	}else{
		echo "＜削除完了＞<br>";
	}
	$result = mysql_query("SELECT * FROM kokyaku");
	$i=0;
	while($row = mysql_fetch_array($result)){
		echo "ID:".$row["id"]."---氏名：".$row["shimei"]."---email：".$row["email"]."<br>";
		$i++;
	}
	echo $i."件<br><br><br><br><br>";
	?>

</body>
</html>