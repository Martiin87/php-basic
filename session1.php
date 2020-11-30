<?php

// variable
// $userId = 123;

// // Afficher
// echo $userId;

// fonction
session_start();

$_SESSION['userId'] = 123;

echo $_SESSION['userId'];