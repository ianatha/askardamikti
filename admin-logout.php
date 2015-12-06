<?php
$_SESSION['loginstatus'] = 'logout';
header('Location: admin-index.php');
setcookie('SES_NAME', '', 0, '/');
?>