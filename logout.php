<?php

session_start();
unset($_SESSION['logined']);
unset($_SESSION['seriesID']);
@header("Location:index.php");
?>