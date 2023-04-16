<!DOCTYPE html>
<html lang="hu">


<head>
	<title>Okostelefonok</title>
	<meta charset="UTF-8" />
	<meta name="author" content="Kollár Edvárd, Szelekovszky Balázs" />
	<link rel="icon" href="images/smartphone.png" />
	<link rel="stylesheet" href="styles/style.css" />
</head>

<?php
session_start();

$file = fopen('datas/messages.txt', 'r');
if (filesize('datas/messages.txt') != 0) {
	$contents = fread($file, filesize('datas/messages.txt'));
	fclose($file);

	$userData = explode("\n", $contents);
	foreach ($userData as $key => $user) {
		if (empty(trim($user))) {
			continue;
		}
		$userData[$key] = explode(',', $user);

		if ($userData[$key][1] === $_SESSION['username']) {
			echo '<p> Felado: ' . $userData[$key][0] . ' </br> ' . $userData[$key][2] . '</p>';
			echo '<p style="font-size: 10px; margin-top: -15px;">' . $userData[$key][3] . '</p>';
		}

		if ($userData[$key][0] === $_SESSION['username']) {
			echo '<p style="text-align: right;"> Cimzett: ' . $userData[$key][1] . ' </br> ' . $userData[$key][2] . '</p>';
			echo '<p style="font-size: 10px; text-align: right; margin-top: -15px;">' . $userData[$key][3] . '</p>';
		}
	}
}
?>

</html>