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

/**
 * @return int
 */
function getnextuserid()
{

    $query = "SELECT * FROM users ORDER BY userid";

    $result = mysql_query($query);

    $rownum = mysql_num_rows($result);
    echo $rownum;

    //��λ�����һ��
    mysql_data_seek($result, $rownum);
    //ȡ������
    $row = mysql_fetch_row($result);

    //echo $row['userid'];
    if ($row['userid']) {
    return $row['userid']+1;
    }
    else
        return 1;

}

function adduser($username,$password,$email,$studentid) {

    $userid = getnextuserid();
    //echo "��ѯ���ĺ�һ���û�id: " .$userid;

    $query = "INSERT INTO users(userid, username, userpassword, email, studentid) VALUE($userid, '$username', $password,'$email',$studentid)";

    if($result = mysql_query($query)) {
        return true;
    }
    else
         die("Error in query: $query. ".mysql_error());

}


/*
function dbclose() {
    $conn=mysql_connect($BASIC['mysql_host'], $BASIC['mysql_user'], $BASIC['mysql_pass']);

    if (!$conn) {
        die('�������ݿ�ʧ��: ' . mysql_error());
    }

}
*/
