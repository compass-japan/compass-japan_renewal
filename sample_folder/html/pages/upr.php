<?php
//�f�[�^�x�[�X�ɐڑ�����ϐ�����錾���Ă���
define( 'DB_HOST', 'localhost' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', 'root' );
define( 'DB_NAME', 'img3' );

// �f�[�^�x�[�X�ɐڑ�
    $db = mysql_connect( DB_HOST, DB_USER, DB_PASS );
    mysql_select_db( DB_NAME, $db );


//�擾����摜�̃����N
$img_dir = '../image/ide/AKB48/akb1.jpg';

// �摜�̎擾
$img_f = file_get_contents( $img_dir );

//�摜�擾�����������ꍇ
if($img_f){	

	// SQL���̍쐬
    $sql = sprintf( 'INSERT INTO img3 (image ) VALUES ( "%s" )',
    				mysql_real_escape_string( $img_dir));


	
	//���ʂ̕\��
	if($sql){
	echo "�摜���f�[�^�x�[�X�ɕۑ����܂����B";
	}else{
		echo "�ۑ��ł��܂���ł����B";
		}
}

?>