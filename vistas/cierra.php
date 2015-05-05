<?php

session_start();
unset($_SESSION);
session_destroy();

header("location:Principal_1.php");
?>
