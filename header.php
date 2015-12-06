<!DOCTYPE html public "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=<?= $charset ?>">
<link rel="shortcut icon" href="swn.ico">
<title><?= $title . $subtitle ?></title>
<link rel="StyleSheet" href="style.css" type="text/css">
<? include 'javascript.php'; ?>
</head>
<body>
<div class="titleBar">
<div class="status" style="float: right;">
<?php
if (!isset($nodate)) {
$day = $days[date('w')];
$date = date('j');
$month = date('n');
$month_s = $months[$month -1];
$year = date('Y');
$hours =  date('H');
$mins =  date('i');
$sec = date('s');
$swatch = date('B');
print "${hours}:${mins}:${sec} - ${day} $date/$month/$year [@$swatch]";
}
?>
</div>
<div class="title">
Τα 88 Ντολμαδάκια - <?= $subtitle ?><br>
</div>
</div>
<div class="bodyclass">
<table border="0" width="100%"><tr><td>