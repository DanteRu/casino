<?php
session_start();
header('Content-Type: text/html; charset=windows-1251');
$folderRoot = "isMain";//���������� ��� ��������� ������

include("server/initCall.php");
include("server/dob.php");
//////////������������� ������������ �������\\\\\\\\\\
/*//////////////////////////////////////////
//����� �������� ������ � ������ //
//�� ������ ������������ ������ //
//$readData["example"] = "this";      //
//� ������� ������ ����������    //
//�� ���� ������                         //
//"-:example:-"                            //
//����� �������� ���                 //
////////////////////////////////////////*/





//������ ���������
$readData["example"] = "��� ���� ������ -:example:- � ���� �������� ��������� �����������.";


    //������������
    $readData["charset"]        = "utf-8";
    $readData["description"]    = "The best casino i have...";
    $readData["keywords"]      = "casino,kazino,cosino,play games,casino games, free casino";
    $readData["author"]          = "artxaker";
   
    $readData["shortcuticon"]  = "";

    $readData["title"]  = "best casino";//if you like to set your own configuration comment this line
    
	//login
	$readData["wrongL"] = "�������� ��� ������������ ��� ������";
	$readData["lText"]  = "�����";
	$readData["pText"]  = "������";
	$readData["inText"]  = "�����";
	$readData["exiText"]  = "�����";
	$readData["hiText"]  = "������";
	
	//registration
	$readData["wrongR"] = "����������� ������� ������";
	$readData["rlText"]  = "�����";
	$readData["rpText"]  = "������";
	$readData["rprText"]  = "��������� ������";
	$readData["reginText"]  = "���������������";
	$readData["rmText"]  = "��. �����";
	$readData["regiText"]  = "�����������";
	

//��������� �����
ob_start("callback");

//���������� ����� ��������
include("includes/header.php");
include("includes/meta.php");
include("includes/link.php");
?>
<script type="text/javascript"></script>
<?php
include("includes/headend.php");
?>
<body>
<?php
include("includes/pages/login.php");
?>
<?php
include("includes/pages/registration.php");
?>
</body>
</html>
<?php
ob_end_flush();
?>