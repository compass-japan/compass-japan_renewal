<?php
session_start();
	$strId=$_POST["id"];
	$strShimei=$_POST["shimei"];
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
	$_SESSION["strErr"]=$strErr;
	if(!empty($strErr)){
		$SESSION["err"]=$strErr;
		header("Location:mskadai2.php".SID);
		exit;
	}
}
//----------------------DB存在チェック----------------------
$cn=mysql_connect("localhost","root","root");
$db=mysql_select_db("login1",$cn);
$id=mysql_real_escape_string($_POST["id"]);
$result=mysql_query("select * from login1 where id = \"$id\";");
if(mysql_num_rows($result)){//
	while($row = mysql_fetch_array($result)){
				if($row[0] == $_POST["shimei"]){
					header("Location:pages/ie.php");
					exit;
				}else{
					echo "パスワードが一致しません";
					?>
					<br><a href="javascript:window.history.back();" title="一つ前のページへ戻る">戻る</a>
						<?php
						}
			}
		}else{
		
			echo "存在しないユーザーです";
			?>
			<br><a href="javascript:window.history.back();" title="一つ前のページへ戻る">戻る</a>
				<?php
		}
	}
?>
</body>
</html>
