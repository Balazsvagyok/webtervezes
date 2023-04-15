<?php 
session_start();

$file = fopen('messages.txt', 'r');
if (filesize('messages.txt') != 0) {
	$contents = fread($file, filesize('messages.txt'));
	fclose($file);

	$userData = explode("\n", $contents);
	foreach ($userData as $key => $user) {
		if (empty(trim($user))) {
			continue;
		}
		$userData[$key] = explode(',', $user);

		if ($userData[$key][1] === $_SESSION['username']) {
			echo '<p> Felado: ' . $userData[$key][0] . ' </br> ' . $userData[$key][2] . '</p>';
		}
	}
}
?>