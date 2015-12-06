<? if ($page['UserText'] != 0) { ?>
<table width="100%" border="0" cellspacing="2" cellpadding="2" align="center" style="background-color: #8FBC8F; border: 1 solid Green;">
<tr><td>
<?= $page['MainText']?>
<br><br><br><br><br><br><br><br><br><br><br><br>
</td></tr>
</table><br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" align="center" style="background-color: #8FBC8F; border: 1 solid Green;">
<tr><td align="center"><strong>Τελείωσε εσύ την ιστορία όπως σ' αρέσει. Γράψε το τέλος σε μια κόλλα αναφορά και κράτα την μέχρι να βγει η καινούργια έκδοση του Ασκαρδαμυκτί για να την καταχωρίσεις εδώ.<BR>Αν δεν έχεις έμπνευση γύρισε πάλι στη <a href="?pageno=<?=$page['UserText']?>">σελίδα <?=$page['UserText']?></a> και διάλεξε μια άλλη συνέχεια.</strong></td></tr>
</table>
<? } else { ?>
<?= $page['MainText']?><br>
<? } ?>
<br>
<? if ($page['DownImage'] == 1) { ?>
<table width="100%" border="0" cellspacing="2" cellpadding="2" align="center">
<tr>
<td colspan="2" align="center"><img class="simg" src="pages\<?=$pageno?>down.gif" alt="book image" border="0"></td>
</tr>
</table>
<? } ?>