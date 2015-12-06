<?php
	session_start();
	$sqlserver = 'localhost';
	$sqluser = 'www';
	$sqlpassword = 'www';
	$sqldatabase = 'askar';
	$title = 'Τα 88 Ντολμαδάκια :: ';
	$charset = 'win-1253';

	$days = array('Κυριακή', 'Δευτέρα', 'Τρίτη', 'Τετάρτη', 'Πέμπτη', 'Παρασκευή', 'Σάββατο');
	$months = array('Ιανουαρίου', 'Φεβρουαρίου', 'Μαρτίου', 'Απριλίου', 'Μαϊου', 'Ιουνίου', 'Ιουλίου', 'Αυγούστου', 'Σεπτεμβρίου', 'Οκτωβρίου', 'Νοεμβρίου', 'Δεκεμβρίου');

	function fromget($name, $default)
	{
		if(!isset($_GET[$name]))
		{
			return $default;
		} else
		{
			return $_GET[$name];
		}
	}

?>