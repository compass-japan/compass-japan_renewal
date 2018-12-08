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
	
	<form method="post"action="message5.php">	
	<div>	
	予定日：<input type="text"name="shimei"value=""size="30"  style="margin-top:160px;">
	<br><br>
	<textarea name="mes" rows="8" cols="30" wrap="hard" placeholder="内容、場所、時間を明記してください。">
</textarea>
	<br><br>
	<input type="submit"value="送信"name="touroku">
	</div>
	</form>
	</div>
<h1><a href="ie.php">戻る</a></h1>
</body>
</html>
