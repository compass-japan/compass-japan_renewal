<?php
session_start();
	$strId=$_POST["id"];
	$strShimei=$_POST["shimei"];
	//----------------------�K�{���̓`�F�b�N----------------------
	if(empty($strId)){
		$strErr="ID�͕K�{���͂ł��B<br>";
	}
	if(!empty($_POST["touroku"])){
		if(empty($strShimei)){
			
			$strErr.="���O�͕K�{���͂ł��B";
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
//----------------------DB���݃`�F�b�N----------------------
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
					echo "�p�X���[�h����v���܂���";
					?>
					<br><a href="javascript:window.history.back();" title="��O�̃y�[�W�֖߂�">�߂�</a>
						<?php
						}
			}
		}else{
		
			echo "���݂��Ȃ����[�U�[�ł�";
			?>
			<br><a href="javascript:window.history.back();" title="��O�̃y�[�W�֖߂�">�߂�</a>
				<?php
		}
	}
?>
</body>
</html>
