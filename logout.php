<?php

session_start();
unset($_SESSION["admin"]);
session_destroy();
header('location: acceso.php');