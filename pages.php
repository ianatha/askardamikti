<?php
	include 'session.php';
	include 'config.php';
	$subtitle = '�����������';
	include 'header.php';
?>

<?php
	$link = mysql_connect($sqlserver, $sqluser, $sqlpassword) or die("Connection to $sqlserver was not established!");
	mysql_select_db($sqldatabase) or die("Database $sqldatabase is not available!");
	$data = mysql_query("SELECT * FROM 88ntol;") or die ('Could not load words table');
	$page = mysql_fetch_array($data, MYSQL_BOTH);
?>
	<div class="info" style="text-align : center;"><h1>�� 88 �����������</h1>
	<h2>����� ����������� <?=mysql_num_rows($data)?> ������� ��� ��� 153 ��������.</h2>
	���� ����������� �� <?=intval(((mysql_num_rows($data)/153)*100)*100)/100?>% ��� ������������.<br><br>
	</div>
	<table width="50%" style="text-font: Courier New;" align="center">
<?
$l = 58; 
for ($i=7; $i<=$l; $i++) {
print "<tr>";
	$status = "�������";
	$data = mysql_query("SELECT * FROM 88ntol WHERE PageNo=$i;") or $status='<span style="color: red">Error!</span>';
	if (mysql_num_rows($data) < 1) { $status = '<span style="color: red">��� �������</span>'; }
		elseif (mysql_num_rows($data) > 1) { $status = '<span style="color: red">����������������</span>'; };
	print "<td><a href='book.php?pageno=$i'>" . $i . "</a>: $status</td>";
	$j = $i + 52;
	$status = "�������";
	$data = mysql_query("SELECT * FROM 88ntol WHERE PageNo=$j;") or $status='<span style="color: red">Error!</span>';
	if (mysql_num_rows($data) < 1) { $status = '<span style="color: red">��� �������</span>'; }
		elseif (mysql_num_rows($data) > 1) { $status = '<span style="color: red">����������������</span>'; };
	print "<td><a href='book.php?pageno=$j'>" . $j . "</a>: $status</td>";
	$j = $j + 52;
	$status = "�������";
	$data = mysql_query("SELECT * FROM 88ntol WHERE PageNo=$j;") or $status='<span style="color: red">Error!</span>';
	if (mysql_num_rows($data) < 1) { $status = '<span style="color: red">��� �������</span>'; }
		elseif (mysql_num_rows($data) > 1) { $status = '<span style="color: red">����������������</span>'; };
	if ($j <= 160) {	print "<td><a href='book.php?pageno=$j'>" . $j . "</a>: $status</td>";};
print "</tr>";
}?>
</table>
<?mysql_close($link);
include 'footer.php'; ?>