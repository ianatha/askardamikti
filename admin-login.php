<?php
	include 'session.php';
	include 'config.php';

	if (!isset($_SESSION['loginstatus']) || ($_SESSION['loginstatus'] == ''))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$link = mysql_connect($sqlserver, $sqluser, $sqlpassword) or die("Connection to $sqlserver was not established!");
		mysql_select_db($sqldatabase) or die("Database $sqldatabase is not available!");
		if ($username != '')
		{
		    $data = mysql_query("SELECT * FROM users WHERE username = '$username';") or die ('Could not load words table');
			if (mysql_num_rows($data) == 0)
			{
				$_SESSION['loginstatus'] = "invalid";
				$_SESSION['invaliduser'] = $username;
				mysql_close($link);
				header("Location: admin-index.php");
			} else
			{	
				$user = mysql_fetch_array($data, MYSQL_BOTH);
				$dbpassword = $user['password'];
		   		$password = md5($user['salt'] . $password);
				if ($dbpassword == $password)
				{
					if ($user['enabled'] == 1)
					{
						$_SESSION['username'] = $username;
						$_SESSION['loginstatus'] = 'ok';
						$_SESSION['rights'] = $user['rights'];
						mysql_close($link);
						header('Location: admin-home.php');
					} else
					{
						$_SESSION['loginstatus'] = 'disabled';
						$_SESSION['invaliduser'] = $username;
						mysql_close($link);
						header('Location: admin-index.php');
					}
				} else
				{
					$_SESSION['loginstatus'] = 'invalid';
					$_SESSION['invaliduser'] = $username;
					mysql_close($link);
					header('Location: admin-index.php');
				}
			}
		} else {
			$_SESSION['loginstatus'] = 'nouser';
			mysql_close($link);
			header('Location: admin-index.php');
		}
	} else {
		$_SESSION['loginstatus'] = "already"; 
		header('Location: admin-index.php');
	}
?>