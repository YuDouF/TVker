<?php
/**
 * Created by PhpStorm.
 * User: Pal
 * Date: 2015/10/16
 * Time: 5:16
 */

include_once('functions.php');

$userid=$_GET['userid'];

dbconn();

if(!$user=getuser($userid))
    echo "���޴��ˣ�";
else{
    //$user=getuser('$userid');
echo "�û�ID��".$user['userid']."<br />";
echo "�û�����".$user['username']."<br />";
echo "�û�ѧ�ţ�".$user["studentid"]."<br />";
echo "�û����䣺".$user["email"]."<br />";
}