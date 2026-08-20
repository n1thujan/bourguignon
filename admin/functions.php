<?php
require_once 'config.php';

function chargerMenu() {
    $json = file_get_contents(MENU_FILE);
    return json_decode($json, true);
}

function enregistrerMenu($menu) {
    $json = json_encode($menu, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    file_put_contents(MENU_FILE, $json);
}

function estConnecte() {
    return isset($_SESSION['logged']) && $_SESSION['logged'] === true;
}

function verifierConnexion() {
    if (!estConnecte()) {
        header('Location: login.php');
        exit;
    }
}
?>
