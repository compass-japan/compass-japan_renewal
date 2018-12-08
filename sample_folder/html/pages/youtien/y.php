<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>日報アップロード</title>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
</head>
<body>
<?php
	
	// アップロードファイル情報を表示する。
	 echo "アップロード先　：//NAS_HDL2-A/eigyo/社員共有/共有ファイル/".$_POST[id]."/" , $_FILES["upload_file"]["name"] , " <BR><BR>";
	 
	//ファイルをアップロードする場所
	$upload_dir = "C:/Apache2/htdocs/pages/youtien/画像/";
	//エラー処理(ファイルを選択せずアップロードしようとした場合)
	if($_POST['mode'] == 'upload'){
		if($_FILES['upload_file']['tmp_name'] == ''){
			print 'アップロードするファイルを選択してください。';
			
		}else{
			//アップロードされたファイルの拡張子
			list($file_name,$file_type) = explode(".",$_FILES['upload_file']['name']);
			$ymd = $name = basename($_FILES['upload_file']['name']);
			$upload_dir = mb_convert_encoding( $upload_dir, 'sjis', 'utf-8');
			$name_sjis = mb_convert_encoding( $name, 'sjis', 'utf-8');
			
			//アップロードされたファイルの名前を付ける
			if($dir = opendir($upload_dir)) {
			    while (($file = readdir($dir)) !== false) {
			        while($file == "$name.$file_type") {
			            $name = $ymd . "$i";
			            $i++;
			        }
			    } 
			    closedir($dir);
			}
			$new_upload_file = $upload_dir .$name_sjis;

			if(move_uploaded_file($_FILES['upload_file']['tmp_name'],$new_upload_file)){
				echo "【".$name."】がアップロードされました";
				?>
				<br><a href="javascript:window.history.back();" title="一つ前のページへ戻る">もう一つファイル共有</a>
					<br><font color="blue"><br><a href="mskadai1-1.php">社員ページへ戻る</font></a>
				<?php
				exit;
			}else{
				echo "【".$name."】のアップロードに失敗しました";
				?>
				<br><br><a href="javascript:window.history.back();" title="一つ前へ戻る">もう一度試みる</a>
				<br><font color="blue"><br><a href="mskadai1-1.php">社員ページへ戻る</font></a>
				<?php
				exit;
			}
		}
	}
	if($_GET['id']){
?>
	<h1 align="center">【<?php echo $_GET[id] ?>】共有ファイルのアップロード
	<form action="y.php" enctype="multipart/form-data" method="post" >
	<input type="hidden" name="id" value="<?php echo $_GET[id] ?>">
	<input type="hidden" name="mode" value="upload">
	<input type="file" name="upload_file">
	<input type="submit" value="アップロード">
	</form></h1>
	<font color="blue" size="5"><br><a href="file.php">戻る</font></a>
<?php
	}else{
?>
	
	<h1 align="center"><a href="y.php?id=井手良祐"><li>井手 良祐</a></h1></li>

<?php
	}
?>

</body>
</html>
