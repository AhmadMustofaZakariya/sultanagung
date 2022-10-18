<?php
session_start();
session_destroy();
header('location: /sultanagung/index.php');
?>