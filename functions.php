<?php
/**
 * Created by PhpStorm.
 * User: Pal
 * Date: 2015/10/6
 * Time: 18:17
 */


global $mysql_host,$mysql_user,$mysql_pass,$mysql_db;

$mysql_host = "ali.pal6exe.cn";
$mysql_user = "admin";
$mysql_pass = "admin";
$mysql_db = "tvker";

global $mytext;
$mytext = "�Ǻ�";

function dbconn() {
    $host=$GLOBALS['mysql_host'];
    $user=$GLOBALS['mysql_user'];
    $pass=$GLOBALS['mysql_pass'];
    $db=$GLOBALS['mysql_db'];

    $conn=mysql_connect($host, $user, $pass);

    if (!$conn) {
        die('�������ݿ�ʧ��: ' . mysql_error());
    }

    mysql_select_db($db) or die("�޷�ѡ�����ݿ�!");

    return $conn;

}

function adduser($username,$password) {
    return "�����û��ɹ�";
}


/*
function dbclose() {
    $conn=mysql_connect($BASIC['mysql_host'], $BASIC['mysql_user'], $BASIC['mysql_pass']);

    if (!$conn) {
        die('�������ݿ�ʧ��: ' . mysql_error());
    }

}
*/
