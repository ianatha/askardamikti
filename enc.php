<?php
	include 'config.php';
	$pageno = fromget('pageno', 1);
	$subtitle = 'στοιχείο ' . $pageno;
	include 'header.php';
?>

<?php
	$link = mysql_connect($sqlserver, $sqluser, $sqlpassword) or die("Connection to $sqlserver was not established!");
	mysql_select_db('encyclopedia') or die("Database $sqldatabase is not available!");
	$data = mysql_query("SELECT * FROM eztext WHERE id = $pageno;") or die ('Could not load words table');
	$page = mysql_fetch_array($data, MYSQL_BOTH);
?>
<?= $page['TEXT']; ?>
<? include 'footer.php'; ?>