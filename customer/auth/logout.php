<?php
session_start();

$_SESSION = [];

session_destroy();

header("Location: /Creme-De-La/index.php");
exit;
