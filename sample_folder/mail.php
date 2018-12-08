<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>mailsend</title>
</head>

<body>

<?php
mb_language("Japanese");
mb_internal_encoding("UTF-8");

$to      = 'ide.love.sekaowa@ezweb.ne.jp';
$subject = '顔認証完了';
$message = '処理が完了しました。';
$headers = 'From: ide.love.sekaowa@ezweb.ne.jp' . "\r\n";

mb_send_mail($to, $subject, $message, $headers);
?>
          <SCRIPT language="JavaScript">
			 <!--
			// 一定時間経過後に指定ページにジャンプする
			mnt = 0.1; // 何秒後に移動するか？
			url = "http://localhost:8080/tegami/letter.php"; // 移動するアドレス
			function jumpPage() {
			   location.href = url;
			}
			 setTimeout("jumpPage()",mnt*1000)
			 //
		  </SCRIPT>

</body>
</html>
