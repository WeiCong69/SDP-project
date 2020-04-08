<?php
session_start();
if (!isset($_SESSION['mySession']))
{
	header("location: index.php");
}
?>