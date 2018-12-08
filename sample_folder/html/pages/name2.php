
<?php
	mb_internal_encoding("UTF-8");
$cn=mysql_connect("localhost","root","root");
$db=mysql_select_db("name1",$cn);
mysql_set_charset('utf8');
if(!empty($_POST["shimei"])){
$_POST["shimei"] = mb_convert_encoding($_POST["shimei"], "UTF-8", "auto");
$result = mysql_query("INSERT INTO name1(shimei) VALUE(\"$_POST[shimei]\")",$cn);
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
