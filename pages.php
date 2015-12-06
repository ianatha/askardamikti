<?php
	include 'session.php';
	include 'config.php';
	$subtitle = 'Σελιδολόγιο';
	include 'header.php';
?>

<?php
	$link = mysql_connect($sqlserver, $sqluser, $sqlpassword) or die("Connection to $sqlserver was not established!");
	mysql_select_db($sqldatabase) or die("Database $sqldatabase is not available!");
	$data = mysql_query("SELECT * FROM 88ntol;") or die ('Could not load words table');
	$page = mysql_fetch_array($data, MYSQL_BOTH);
?>
	<div class="info" style="text-align : center;"><h1>Τα 88 Ντολμαδάκια</h1>
	<h2>Έχουν καταχωρηθεί <?=mysql_num_rows($data)?> σελίδες απο τις 153 συνολικά.</h2>
	Έχει ολοκληρωθεί το <?=intval(((mysql_num_rows($data)/153)*100)*100)/100?>% των καταχωρήσεων.<br><br>
	</div>
	<table width="50%" style="text-font: Courier New;" align="center">
<?
$l = 58; 
for ($i=7; $i<=$l; $i++) {
print "<tr>";
	$status = "Υπάρχει";
	$data = mysql_query("SELECT * FROM 88ntol WHERE PageNo=$i;") or $status='<span style="color: red">Error!</span>';
	if (mysql_num_rows($data) < 1) { $status = '<span style="color: red">Δεν υπάρχει</span>'; }
		elseif (mysql_num_rows($data) > 1) { $status = '<span style="color: red">Διπλοεγγεγραμένο</span>'; };
	print "<td><a href='book.php?pageno=$i'>" . $i . "</a>: $status</td>";
	$j = $i + 52;
	$status = "Υπάρχει";
	$data = mysql_query("SELECT * FROM 88ntol WHERE PageNo=$j;") or $status='<span style="color: red">Error!</span>';
	if (mysql_num_rows($data) < 1) { $status = '<span style="color: red">Δεν υπάρχει</span>'; }
		elseif (mysql_num_rows($data) > 1) { $status = '<span style="color: red">Διπλοεγγεγραμένο</span>'; };
	print "<td><a href='book.php?pageno=$j'>" . $j . "</a>: $status</td>";
	$j = $j + 52;
	$status = "Υπάρχει";
	$data = mysql_query("SELECT * FROM 88ntol WHERE PageNo=$j;") or $status='<span style="color: red">Error!</span>';
	if (mysql_num_rows($data) < 1) { $status = '<span style="color: red">Δεν υπάρχει</span>'; }
		elseif (mysql_num_rows($data) > 1) { $status = '<span style="color: red">Διπλοεγγεγραμένο</span>'; };
	if ($j <= 160) {	print "<td><a href='book.php?pageno=$j'>" . $j . "</a>: $status</td>";};
print "</tr>";
}?>
</table>
<?mysql_close($link);
include 'footer.php'; ?>