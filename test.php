<?php
/**
 * Created by PhpStorm.
 * User: Pal
 * Date: 2015/10/5
 * Time: 23:42
 */

include_once ('config/allconfig.php');
include_once ('function.php');

$conn=mysql_connect($BASIC['mysql_host'], $BASIC['mysql_user'], $BASIC['mysql_pass']);

if (!$conn) {
    die('�������ݿ�ʧ��: ' . mysql_error());
}
echo "mysql ���ӳɹ���";



mysql_close($conn);
?>