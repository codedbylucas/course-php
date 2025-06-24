<?php
session_start();
//EXCLUIR O COOKIE E A SESSION

unset($_SESSION['usuario']);
setcookie('cookieTema', '', -1);
header('Location: index.php');