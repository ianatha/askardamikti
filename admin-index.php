<?php
include 'session.php';
include 'config.php';
$subtitle = '���������� - [Login]';
include 'header.php';
?>
<div align="center">
<img src="images\logo.gif" border="0" alt="">
<br>
<br>
<h1>���������� �����������</h1>
<form action="admin-login.php" method="post" name="forma" id="loginform">
<table cellspacing="2" cellpadding="2" border="0">
<tr>
	<td align="right">Username:<br>Password:<br></td>

	<td>
	<input title="�������� �� username ���" "type="text" name="username" size="12" maxlength="12" class="loginbox"
	<? if (isset($_SESSION['loginstatus']) && ($_SESSION['loginstatus'] == 'invalid')) { ?> value="<?= $_SESSION['invaliduser'] ?>" readonly <? } ?>
	<? if (isset($_SESSION['loginstatus']) && (($_SESSION['loginstatus'] == 'logout') || ($_SESSION['loginstatus'] == 'ok') || ($_SESSION['loginstatus'] == 'already'))) { ?>value="<?= $_SESSION['username'] ?>" readonly<? } ?>><br>
	<input title="�������� ��� ������ ���" type="password" name="password" size="12" maxlength="12" class="loginbox"
	<? if (isset($_SESSION['loginstatus']) && ($_SESSION['loginstatus'] == 'logout')) { ?>value="<?= $_SESSION['username'] ?>" readonly<? } ?>>
	</td>

	<? if (isset($_SESSION['loginstatus']) && ($_SESSION['loginstatus'] != '')) { ?>
	<td rowspan="2" class="errormessage" valign="center">
	<? if ($_SESSION['loginstatus'] == 'invalid') { ?>
	�������� ����� ������<br>� ������. �����������<br>����.
	<? } elseif ($_SESSION['loginstatus'] == 'error') { ?>
	� ����� ��� ����� � ���<br>����� ����� login. �������<br>������� ��� ��� ��������.<br>�������� �������� �� ��������<br>���.
	<? } elseif ($_SESSION['loginstatus'] == 'disabled') { ?>
	� ����������� ��� ����� �����������������.<br>��� ����������� ������ �������������� ���<br>�����������.
	<? } elseif ($_SESSION['loginstatus'] == 'nouser') { ?>
	<?php $_SESSION['loginstatus'] = ''; ?>
	<? } elseif ($_SESSION['loginstatus'] == 'already') { ?>
	����� ����� ��� login �� <?= $_SESSION['username'] ?>.<br>�������� ����� <a href="admin\logout.php">logout</a> �<br>���������� ��� ��� ����<br>��� ������ ���. ��������<br>������ �� <a href="admin-home.php">����������</a>.
	<? $_SESSION['loginstatus'] = 'ok'; ?>
	<? } elseif ($_SESSION['loginstatus'] == "logout") { ?>
	<?php
			session_unset();
			session_destroy();
	?>
	����� ����� ����������.<br>�������� �� ���������� login.
	<? } ?>
	</td>
	<? } ?>
</tr>
<tr>
<td colspan="2" align="center">
	<input type="submit" value="log me in">
</td>
</tr>
</table>
</form>
<!-- #include file="footer.asp" -->