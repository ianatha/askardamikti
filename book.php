<?php
	include 'session.php';
	include 'config.php';
	$pageno = fromget('pageno', 7);
	$subtitle = 'σελίδα ' . $pageno;
	include 'header.php';
?>

<?php
	$link = mysql_connect($sqlserver, $sqluser, $sqlpassword) or die("Connection to $sqlserver was not established!");
	mysql_select_db($sqldatabase) or die("Database $sqldatabase is not available!");
	$data = mysql_query("SELECT * FROM 88ntol WHERE PageNo = $pageno;") or die ('Could not load words table');
	$page = mysql_fetch_array($data, MYSQL_BOTH);
?>

<? if (mysql_num_rows($data) == 0) { ?>
	<div align="center"><img src="images/inside.gif" alt="" width="93" height="70" border="0"><br>
	<h1 class="error" style="text-align : center;">Η σελίδα <?= $pageno ?> δεν έχει καταχωρηθεί.</h1>
	</div>
<? } else {
	if ($page['Horizontal'] == 1) {
		include 'book_horizontal.php';
	} else {
		include 'book_vertical.php';
	}
}
mysql_close($link);
include 'footer.php'; ?>