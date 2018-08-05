<?php
sesion_start();

$_SESSION['access_token'] = "";
$_SESSION['access_profile'] = "";

header('location:index1.php');