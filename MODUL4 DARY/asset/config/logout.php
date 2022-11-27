<?php
session_start();
$_SESSION["login"] = [];
session_destroy();
session_unset();

header("Location:HomeAwal-Dary.php");
exit;

?>