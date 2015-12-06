<?php
include 'session.php';
include 'config.php';
$subtitle = 'Διαχείρηση - [Login]';
include 'header.php';
?>
<div align="center">
<img src="images\logo.gif" border="0" alt="">
<br>
<br>
<h1>Διαχείρηση ιστοσελίδας</h1>
<form action="admin-login.php" method="post" name="forma" id="loginform">
<table cellspacing="2" cellpadding="2" border="0">
<tr>
	<td align="right">Username:<br>Password:<br></td>

	<td>
	<input title="Εισάγετε το username σας" "type="text" name="username" size="12" maxlength="12" class="loginbox"
	<? if (isset($_SESSION['loginstatus']) && ($_SESSION['loginstatus'] == 'invalid')) { ?> value="<?= $_SESSION['invaliduser'] ?>" readonly <? } ?>
	<? if (isset($_SESSION['loginstatus']) && (($_SESSION['loginstatus'] == 'logout') || ($_SESSION['loginstatus'] == 'ok') || ($_SESSION['loginstatus'] == 'already'))) { ?>value="<?= $_SESSION['username'] ?>" readonly<? } ?>><br>
	<input title="Εισάγετε τον κωδικό σας" type="password" name="password" size="12" maxlength="12" class="loginbox"
	<? if (isset($_SESSION['loginstatus']) && ($_SESSION['loginstatus'] == 'logout')) { ?>value="<?= $_SESSION['username'] ?>" readonly<? } ?>>
	</td>

	<? if (isset($_SESSION['loginstatus']) && ($_SESSION['loginstatus'] != '')) { ?>
	<td rowspan="2" class="errormessage" valign="center">
	<? if ($_SESSION['loginstatus'] == 'invalid') { ?>
	Εισάγατε λάθος χρήστη<br>ή κωδικό. Προσπαθήστε<br>ξανά.
	<? } elseif ($_SESSION['loginstatus'] == 'error') { ?>
	Η χρήση σας έληξε ή δεν<br>έχετε κάνει login. Ζητούμε<br>συγνώμη για την δυσκολία.<br>Παρακαλώ εισάγετε τα στοιχεία<br>σας.
	<? } elseif ($_SESSION['loginstatus'] == 'disabled') { ?>
	Ο λογαριασμός σας είναι απενεργοποιημένος.<br>Για οποιαδήποτε απορία συμβουλευθείτε τον<br>διαχειρηστή.
	<? } elseif ($_SESSION['loginstatus'] == 'nouser') { ?>
	<?php $_SESSION['loginstatus'] = ''; ?>
	<? } elseif ($_SESSION['loginstatus'] == 'already') { ?>
	Έχετε κάνει ήδη login ως <?= $_SESSION['username'] ?>.<br>Παρακαλώ κάντε <a href="admin\logout.php">logout</a> ή<br>περιμένετε για την λήξη<br>της χρήσης σας. Μπορείτε<br>επίσης να <a href="admin-home.php">συνεχίσετε</a>.
	<? $_SESSION['loginstatus'] = 'ok'; ?>
	<? } elseif ($_SESSION['loginstatus'] == "logout") { ?>
	<?php
			session_unset();
			session_destroy();
	?>
	Είστε εκτός συστήματος.<br>Μπορείτε να ξανακάνετε login.
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