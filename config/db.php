<?php
try {
    $db = new PDO("mysql:host=141.94.22.233;dbname=comparo_simple;charset=utf8", 'benji', 'estala2022mierda');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
