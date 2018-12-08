<?php
define( 'DB_HOST', 'localhost' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', 'root' );
define( 'DB_NAME', 'img3' );
{
   // データベースに接続
    $DB = mysql_connect("localhost","root","root");
    mysql_select_db( img3, $DB );
 
  // 表示するイメージのIDをパラメータから取得
  $id = isset( $_GET['id'] ) ? intval( $_GET['id'] ) : 0;
  $sql = sprintf( 'SELECT * FROM img3 WHERE id = %d', $id );
 
  // データの取得
  $result = mysql_query( $sql );
  $row = mysql_fetch_array( $result, MYSQL_ASSOC );
 
  // 画像を出力
  header( 'Content-Type: image/jpeg' );
  print $row['image'];
}
?>
