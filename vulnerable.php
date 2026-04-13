<?php
// Simulation d'une faille pour le TP Master 1
$user_id = $_GET['id'];

// Faille SQL Injection (le paramètre n'est pas filtré)
$query = "SELECT username FROM users WHERE id = " . $user_id;

// Utilisation d'une fonction obsolète et dangereuse
mysql_query($query);
?>
