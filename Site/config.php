<?php

    try
    {
        $bdd = new PDO("mysql-projetphp.alwaysdata.net ;dbname=projetphp_projet;charset=utf8", "projetphp", "OussamaPHP");
    }
    catch(PDOException $erreurBD)
    {
        die('Erreur de connexion à la base de donnée : '.$erreurBD->getMessage());
    }

