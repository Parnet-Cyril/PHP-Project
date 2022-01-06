<?php

    session_start();
    include_once (config.php);

    if (isset($_SESSION['pseudo']))
    {
        header(index.php);
        exit;
    }

    if (!empty($_POST))
    {
        extract($_POST);
        $valid = true;

        $Identifiant = htmlspecialchars(trim($Mail));
        $Password = trim($Password);

        if (empty($Identifiant))
        {
            $valid = false;
            $_SESSION['flash']['warning'] = "Veuillez renseigner un identifiant!";
        }

        if (empty($Password))
        {
            $valid = false;
            $error_password = "Veuillez renseigner un mot de passe!";
        }


        $req = $DB->query('Select * from USER where identifant = :identifiant and 
        password = :password', array('identifiant' => $Identifiant, 'password' => $Password));

        $req = $req->fetch();



        if (!$req['identifiant'])
        {
            $valid = false;
            $_SESSION['flash']['warning'] = "Votre identifiant ne correspond pas !";
        }

        if (!$req['password'])
        {
            $valid = false;
            $error_password2 = "Votre mot de passe ne correspond pas !";
        }

        if ($valid)
        {
            $_SESSION['identifiant'] = $req['identifiant'];
            $_SESSION['password'] = $req['password'];

            exit;
        }

}



