<?php
session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis" />
<link href="../css/common.css" rel="stylesheet" type="text/css" />
<title>������ЃR���p�X�W���p���b�Ј��y�[�W</title>

<style type="text/css">
	
	
	body {
  background-image: url(../image/famliy/flower10[1].jpg);
  background-size:cover;
  background-attachment: scroll ;
  
  

}

</head>
</style>
<body>


    <td><p><B>
    
    	
    	
    	
    
<?php
	if(!empty($_SESSION["strErr"])){
		echo$_SESSION["strErr"];
}
 
?>
<div style="position:absolute; top:500px; left:650px;">
<div style="width:350px;height:170px;background:#ffcccc;border:#ff0000 solid 1px;">
	
<h1 align="center"><font face="AR DECODE">Welcome to</font></h1>
<form method="post"action="famliy1.php">
<h2 align="center">
�@�@�@�@�@�@ID�F<input type="text"name="id"value="<?php echo $_SESSION["id"]?>"size="30"><br><br>
�p�X���[�h�F<input type="password"name="shimei"value="<?php echo $_SESSION["shimei"]?>"size="30"><br><br>
	<input type="submit"value="���O�C��"name="touroku"></h2>
	</form>
	</div></div>
<br><br>

 </tr>
 
 <tr>
  
 </tr>
</table>
</body>
<script language="javascript" src="base.js"></script>
<script language="javascript" src="rollover.js"></script>
<script language="javascript" src="setevent.js"></script>
<!-- InstanceEnd --></html>
