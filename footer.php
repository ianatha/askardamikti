</td></tr></table></div><br><div class="subTitle">
<span style="float:left; font-size: xx-small;">
&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:window.history.go(-1);">����������� ������</a> &middot; 
<a href="javascript:addbookmark();">�������� ������������ ��� ���������</a>
&middot; <a href="index.php">������ ������</a>
<? if (isset($pageno)) { ?>
<? $ib = $pageno -1;
   if ($ib < 7) { $ib = 7; };
   $ia = $pageno + 1;
   if ($ib > 160) { $ib = 160; };
?>
&middot;<a href="?pageno=<?=$ib?>"><< ������</a>&middot;<a href="?pageno=<?=$ia?>">������ >></a>&nbsp;&nbsp;&nbsp;&nbsp;
<? } ?>
</span>
�� 88 ����������� - <?= $subtitle ?>
<div class="copyright">
������������ ������� 800x600 ���� Internet Explorer 6.0  ::  (C) 2002-2003 by Vega Group. All rights reserved<br>
<span style="float:left;">
<a href="mailto:athanasakis@freemail.gr">athanasakis@freemail.gr</a></span>
ASP & PHP version (������������ 4) and HTML design by Theocharis Athanasakis.<br>
<span style="float:left;">
<a href="mailto:stzirib@freemail.gr">stzirib@freemail.gr</a></span>
Book transcription and beta testing by Stefanos Tzirivilas.
</div>

</body>
</html>