<?php include 'session.php';
include 'config.php';
if ($_SESSION['loginstatus'] != 'ok')
{
	die ("You are not logged in :(");
}
$subtitle = "Διαχείρηση";
$menuname = "admin";
include 'header.php';
?>
<script>
function opw(w){
window.open("admin-edit.php?fid=" + w, "defin", "scrollbars=1, width=540, height=640");
}
</script>
<h2>Διαχείρηση βιβιλίου</h2>
<?php
$link = mysql_connect($sqlserver, $sqluser, $sqlpassword) or die("Connection to $sqlserver was not established!");
mysql_select_db($sqldatabase) or die("Database $sqldatabase is not available!");
$data = mysql_query("SELECT * FROM 88ntol ORDER By PageNo;") or die ('Could not load table');
?>
<table border='1' width='100%'>
<tr>
<?php
$i = 0;
while ($i < mysql_num_fields($data)) {
   echo "<td>";
   $meta = mysql_field_name($data, $i);
   echo "<b>" . $meta . "</b>";
   echo "</td>";
   $i++;
}
?>
</tr>
<?php
$i = 0;
while ($i < mysql_num_rows($data)) {
	echo "<tr>";
	$j = 0;
	$row = mysql_fetch_array($data, MYSQL_NUM);
	while ($j < mysql_num_fields($data)) {
	   echo "<td>";
       printf ($row[$j]);  
	   echo "</td>";
	   $j++;
	}
	echo "<td><a href='javascript:opw(${row[0]});'>edit</a></td>";
	echo "</tr>";
   $i++;
}
?>
</table>
</body>
</html>