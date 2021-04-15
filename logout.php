<?php
session_destroy();
unset($_SESSION["use"]);

header('Location:login.html');
?>