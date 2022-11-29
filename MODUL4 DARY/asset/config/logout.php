<?php
session_start();
$_SESSION["login"] = [];
session_unset();

header("Location:HomeAwal-Dary.php");
exit;

?>