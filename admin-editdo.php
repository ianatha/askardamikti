<?php 
session_start();
if ($_SESSION['loginstatus'] != 'ok')
{
	die ("You are not logged in :(");
}
include 'config.php';
$link = mysql_connect($sqlserver, $sqluser, $sqlpassword) or die("Connection to $sqlserver was not established!");
mysql_select_db($sqldatabase) or die("Database $sqldatabase is not available!");
extract ($_POST, EXTR_PREFIX_SAME, "a");
$query = "UPDATE doc_faq SET chapter=$chapter, subchapter=$subchapter, title='$a_title', doctext='$doctext' WHERE fid=$fid;";
mysql_query($query);
mysql_close($link);
header("Location: admin-home.php");
?>