<?php

try
{
    $db = new PDO('mysql:host=localhost;port=3306;dbname=bddqcm',
        'root',
        'ff',
        array( PDO::ATTR_PERSISTENT => false, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
    );
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

// Exemple
//$recipesStatement = $db->prepare('SELECT * FROM etudiants');
//$recipesStatement->execute();
//$recipes = $recipesStatement->fetchAll();