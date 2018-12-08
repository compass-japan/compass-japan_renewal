<?php
session_start();
?>

<html>
<head>
	<meta http-equiv="Content-type"content="text/html;charset=UTF-8">
	<title>Untitled</title>
</head>

<body>
	<div style="width:690px;height:600px;background-image:url(../image/famliy/frame.png);  background-repeat: no-repeat;text-align:center;margin:auto;margin-top:50px;">
	
	<form method="post"action="message1.php">	
	<div>	
	名前：<input type="text"name="shimei"value=""size="30"  style="margin-top:160px;">
	<br><br>
	<textarea name="mes" rows="8" cols="30" wrap="hard" placeholder="メッセージを入れてください。">
</textarea>
	<br><br>
	<input type="submit"value="送信"name="touroku">
	</div>
	</form>
	</div>
<h1><a href="ie.php">戻る</a></h1>
</body>
</html>
