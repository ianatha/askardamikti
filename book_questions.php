<table width="100%" border="0" cellspacing="2" cellpadding="2" align="center" style="background-color: #8FBC8F; border: 1 solid Green;">
<tr>
<? if ($page['EndPage'] == 1) { ?>
<td align="center" style="font-size: x-large">Τ&middot;Ε&middot;Λ&middot;Ο&middot;Σ</td></tr>
<tr><td align="center">(Αν θέλεις, μπορείς να ξαναδιαβάσεις την ιστορία <a href="?pageno=7">απο την αρχή</a>, διαλέγοντας αυτή τη φορά διαφορετικές συνέχειες).</td>
<? } else { ?>
	<td colspan="2" align="center"><?= $page['Question']?></td>
<? } ?>
</tr>
</table>
<table align="center" cellspacing="2" cellpadding="2" border="0">
<? if ($page['NoChoices'] != 127) { ?>
<? for ($i = 1; $i <= $page['NoChoices']; $i++) { ?>
<tr>
<td align="right"><?= $page['Choice' . $i . 'Name'] ?></td>
<td><a href="?pageno=<?= $page['Choice' . $i . 'Page'] ?>"><img src="images\bookarrow.gif" alt="" border="0"></a></td>
</tr>
<? } ?>
<? } else { ?>
<?
	$tlink = mysql_connect($sqlserver, $sqluser, $sqlpassword) or die("Connection to $sqlserver was not established!");
	mysql_select_db($sqldatabase) or die("Database $sqldatabase is not available!");
	$tquery = 'SELECT * FROM excuse;';
	$tresult = mysql_query($tquery) or die("Query failure!");
	$snr = mysql_num_rows($tresult);
?>
<tr>
<td align="right">Βαρέθηκα!</td>
<td><a href="javascript:showexc(<?=rand(1, $snr)?>, <?=$page['Choice1Page']?>);"><img src="images\bookarrow.gif" alt="" border="0"></a></td>
</tr>
<tr>
<td align="right">Δε βαρέθηκα!</td>
<td><a href="?pageno=<?= $page['Choice1Page'] ?>"><img src="images\bookarrow.gif" alt="" border="0"></a></td>
</tr>

<? } ?>
</table>