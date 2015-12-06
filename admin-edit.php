<?php 
include 'config.php';
session_start();
if ($_SESSION['loginstatus'] != 'ok')
{
	die ("You are not logged in :(");
}?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Salonica Wireless Network</title>
<LINK REL="StyleSheet" HREF="style.css" type="text/css">
<META http-equiv=Content-Type content="text/html; charset=<?= $charset ?>">
<script src="fade.js" language="Javascript"></script>
<script language="Javascript">
//Init here
</script>
</head>
<body>
<table border='0' width='100%'><tr><td background='images/tile_back.gif'>
<table border='0' width='100%'><tr><td class='c0s0'>SALONICA WIRELESS NETOWRK - FAQ EDIT</td></tr></table></table>
<?php
include 'config.php';
$link = mysql_connect($sqlserver, $sqluser, $sqlpassword) or die("Connection to $sqlserver was not established!");
mysql_select_db($sqldatabase) or die("Database $sqldatabase is not available!");
$data = mysql_query("SELECT * FROM doc_faq WHERE fid = '" . $_GET['fid'] . "';") or die ('Could not load table');
$row = mysql_fetch_array($data, MYSQL_NUM);
?>
<FORM METHOD=POST ACTION="admin-editdo.php">
FID: <INPUT TYPE="text" size="80" NAME="fid" readonly value="<?= $row[0] ?>"><BR>
CHAPTER: <INPUT TYPE="text" size="80" NAME="chapter" value="<?= $row[1] ?>"><BR>
SUBCHAPTER: <INPUT TYPE="text" size="80" NAME="subchapter" value="<?= $row[2] ?>"><BR>
TITLE: <INPUT TYPE="text" size="80" NAME="title" value="<?= $row[3] ?>"><BR>
TEXT:<BR>
<TEXTAREA NAME="doctext" ROWS="18" COLS="60">
<?= $row[4] ?>
</TEXTAREA>
<br><INPUT TYPE="submit"><INPUT TYPE="reset">
</FORM>
</table>
<?= $row[4] ?>
</body>
</html>