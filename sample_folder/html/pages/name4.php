
<?php
	
$cn=mysql_connect("localhost","root","root");
$db=mysql_select_db("name2",$cn);
if(!empty($_POST["shimei"])){

$result = mysql_query("INSERT INTO name2(shimei) VALUE(\"$_POST[shimei]\")",$cn);
	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>メッセージ</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../pages/common.css" rel="stylesheet" type="text/css" />
	<SCRIPT language="JavaScript">
 <!--
// 一定時間経過後に指定ページにジャンプする
mnt = 1.5; // 何秒後に移動するか？
url = "ie.php"; // 移動するアドレス
function jumpPage() {
   location.href = url;
}
 setTimeout("jumpPage()",mnt*1000)
 //-->
 </SCRIPT>
</head>

<body>
	
<h1 align="center">名前を送信いたしました。</h1>
</body>
</html>
