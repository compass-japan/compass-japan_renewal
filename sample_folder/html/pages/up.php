<?php
//データベースに接続する変数名を宣言しておく
define( 'DB_HOST', 'localhost' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', 'root' );
define( 'DB_NAME', 'img' );

// データベースに接続
    $db_link = mysql_connect( DB_HOST, DB_USER, DB_PASS );
    mysql_select_db( DB_NAME, $db_link );


//取得する画像のリンク
$img_url = '../image/ide/sekaowa/sekaowa5.jpg';

// 画像の取得
$img_file = file_get_contents( $img_url );

//画像取得が成功した場合
if($img_file){	

	// SQL文の作成
    $sql = sprintf( 'INSERT INTO img (image ) VALUES ( "%s" )',
    				mysql_real_escape_string( $img_url));


	
	//結果の表示
	if($sql){
	echo "画像をデータベースに保存しました。";
	}else{
		echo "保存できませんでした。";
		}
}

?>
