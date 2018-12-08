<?php
define( 'DB_HOST', 'localhost' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', 'root' );
define( 'DB_NAME', 'img' );
{
    // DBに取り込む画像のパス
　　/*$img_path = '/image/ide/sekaowa/sekaowa1.png';
	$img_path = '../image/ide/sekaowa/sekaowa2.jpg';
	$img_path = '../image/ide/sekaowa/sekaowa3.jpg';
	$img_path = '../image/ide/sekaowa/sekaowa4.jpg';
	$img_path = '../image/ide/sekaowa/sekaowa5.jpg';
	$img_path = '../image/ide/sekaowa/sekaowa6.jpg';
	$img_path = '../image/ide/sekaowa/sekaowa7.jpg';
	$img_path = '../image/ide/sekaowa/sekaowa8.jpg';
	$img_path = '../image/ide/sekaowa/sekaowa9.jpg';
	$img_path = '../image/ide/sekaowa/sekaowa10.jpg';
	$img_path = '../image/ide/sekaowa/sekaowa11.jpg';
	$img_path = '../image/ide/sekaowa/sekaowa12.jpg';
	$img_path = '../image/ide/sekaowa/sekaowa13.jpg';
	$img_path = '../image/ide/sekaowa/sekaowa14.jpg';*/
	
    // データベースに接続
    $DB = mysql_connect("localhost","root","root");
    mysql_select_db( img, $DB );
 
    // 画像の取得
    $image = file_get_contents( $img_path );
 
    // SQL文の作成
    $sql = sprintf( 'INSERT INTO temp_upload (image ) VALUES ( "%s" )',
                    mysql_real_escape_string( $image ) );
　　
　　// SQL文の実行
    $result = mysql_query( $sql );
}
?>
