<?php
if($folderRoot != "isMain"){header("location:../index.php");}

//��������� ��� ������������
define("DBHOST","localhost");
define("DBUSER","root");
define("DBPASS","");
define("DABASE","curok");

//����� mysqli
$mysqli = new mysqli(DBHOST,DBUSER,DBPASS,DABASE);

//���� ����������� ���������� ������� ������
if($mysqli->connect_error)
{
    die("������ �����������:".$mysqli->connect_error);
}
?>