<?php
include '_config.php';
error_reporting(0);
session_start();

if (!isset($_SESSION['username'])) {
	header('Location: login.php');
}
?>