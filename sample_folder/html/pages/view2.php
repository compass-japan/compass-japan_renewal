<?php
define( 'DB_HOST', 'localhost' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', 'root' );
define( 'DB_NAME', 'img3' );
{
   // �f�[�^�x�[�X�ɐڑ�
    $DB = mysql_connect("localhost","root","root");
    mysql_select_db( img3, $DB );
 
  // �\������C���[�W��ID���p�����[�^����擾
  $id = isset( $_GET['id'] ) ? intval( $_GET['id'] ) : 0;
  $sql = sprintf( 'SELECT * FROM img3 WHERE id = %d', $id );
 
  // �f�[�^�̎擾
  $result = mysql_query( $sql );
  $row = mysql_fetch_array( $result, MYSQL_ASSOC );
 
  // �摜���o��
  header( 'Content-Type: image/jpeg' );
  print $row['image'];
}
?>
