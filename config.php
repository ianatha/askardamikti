<?php
	session_start();
	$sqlserver = 'localhost';
	$sqluser = 'www';
	$sqlpassword = 'www';
	$sqldatabase = 'askar';
	$title = '�� 88 ����������� :: ';
	$charset = 'win-1253';

	$days = array('�������', '�������', '�����', '�������', '������', '���������', '�������');
	$months = array('����������', '�����������', '�������', '��������', '�����', '�������', '�������', '���������', '�����������', '���������', '���������', '����������');

	function fromget($name, $default)
	{
		if(!isset($_GET[$name]))
		{
			return $default;
		} else
		{
			return $_GET[$name];
		}
	}

?>