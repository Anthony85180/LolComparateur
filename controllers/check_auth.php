<?php
if (! isset($_SESSION['IP']) || $_SESSION['IP'] != $_SERVER['REMOTE_ADDR']) {
	header('location: index.php');
	exit;
}
?>
