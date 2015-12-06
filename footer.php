</td></tr></table></div><br><div class="subTitle">
<span style="float:left; font-size: xx-small;">
&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:window.history.go(-1);">προηγούμενη σελίδα</a> &middot; 
<a href="javascript:addbookmark();">προσθήκη σελιδοδείκτη στα αγαπημένα</a>
&middot; <a href="index.php">αρχική σελίδα</a>
<? if (isset($pageno)) { ?>
<? $ib = $pageno -1;
   if ($ib < 7) { $ib = 7; };
   $ia = $pageno + 1;
   if ($ib > 160) { $ib = 160; };
?>
&middot;<a href="?pageno=<?=$ib?>"><< σελίδα</a>&middot;<a href="?pageno=<?=$ia?>">σελίδα >></a>&nbsp;&nbsp;&nbsp;&nbsp;
<? } ?>
</span>
Τα 88 Ντολμαδάκια - <?= $subtitle ?>
<div class="copyright">
Προτεινόμενη ανάλυση 800x600 στον Internet Explorer 6.0  ::  (C) 2002-2003 by Vega Group. All rights reserved<br>
<span style="float:left;">
<a href="mailto:athanasakis@freemail.gr">athanasakis@freemail.gr</a></span>
ASP & PHP version (ασκαρδαμυκτί 4) and HTML design by Theocharis Athanasakis.<br>
<span style="float:left;">
<a href="mailto:stzirib@freemail.gr">stzirib@freemail.gr</a></span>
Book transcription and beta testing by Stefanos Tzirivilas.
</div>

</body>
</html>