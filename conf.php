<?php

// connection à la bdd todoZyigh
try{
    $bdd = new PDO('mysql:host=localhost;dbname=todoZyigh;charset=utf8', 'root', '');
} catch(Exception $e) {
    die('Erreur :' . $e->GetMessage());
};

if(isset($_GET['id_type'])) $id_type = $_GET['id_type'];
else $id_type = 'NOT NULL';

if (!isset($_GET['id_type'])){
    // lire la bdd todos
    $requete = $bdd->prepare('SELECT name, github, user_name, priorite, done FROM todos') or die(print_r($bdd->errorInfo()));
    $requete->execute();
}
else {
    // lire la bdd todos + WHERE
    $requete = $bdd->prepare('SELECT name, github, user_name, priorite, done FROM todos
                                    WHERE id_type =?') or die(print_r($bdd->errorInfo()));
    $requete->execute([$id_type]);
}
