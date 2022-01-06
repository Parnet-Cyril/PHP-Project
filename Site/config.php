<?php

    try
    {
        $bdd = new PDO("mysql:host=CHANGER_HOST_ICI;dbname=CHANGER_DB_NAME;charset=utf8", "CHANGER_LOGIN", "CHANGER_PASS");
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }

