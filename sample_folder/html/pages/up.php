<?php
//�f�[�^�x�[�X�ɐڑ�����ϐ�����錾���Ă���
define( 'DB_HOST', 'localhost' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', 'root' );
define( 'DB_NAME', 'img' );

// �f�[�^�x�[�X�ɐڑ�
    $db_link = mysql_connect( DB_HOST, DB_USER, DB_PASS );
    mysql_select_db( DB_NAME, $db_link );


//�擾����摜�̃����N
$img_url = '../image/ide/sekaowa/sekaowa5.jpg';

// �摜�̎擾
$img_file = file_get_contents( $img_url );

//�摜�擾�����������ꍇ
if($img_file){	

	// SQL���̍쐬
    $sql = sprintf( 'INSERT INTO img (image ) VALUES ( "%s" )',
    				mysql_real_escape_string( $img_url));


	
	//���ʂ̕\��
	if($sql){
	echo "�摜���f�[�^�x�[�X�ɕۑ����܂����B";
	}else{
		echo "�ۑ��ł��܂���ł����B";
		}
}

?>
