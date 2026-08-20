<?php
require_once 'config.php';

// Supprime les informations de connexion
session_destroy();

// Retour à la page de connexion
header('Location: login.php');
exit;
?>
