<?php

session_start();
session_destroy();
header("Location:B10_index.php");
?>