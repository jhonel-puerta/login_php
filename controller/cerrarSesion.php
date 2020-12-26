<?php

session_start();
$id = $_SESSION["usuario"];
session_destroy();

header("Location: ../index.php?g=$id");
?>