<? $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/' . basename($_SERVER['PHP_SELF']) ?>
<script language='javascript'>
<!--
function addbookmark()
{
	if(parseInt(navigator.appVersion, 10) >= 4 && navigator.appName.toLowerCase().indexOf("explorer") > -1)
	window.external.AddFavorite('<?=$url?>', 'Τα 88 Ντολμαδάκια - <?= $subtitle ?>');
}
function wclose(afpage)
{
	window.close();
	self.opener.navigate("book.php?pageno=" + afpage);
}

function showexc(exc, afpage)
{
   defwin = window.open("showexc.php?exc=" + exc + "&afpage=" + afpage, "defin", "scrollbars=1, width=480, height=260");
   defwin.focus();
   self.navigate(self.location);
}
//-->
</script>