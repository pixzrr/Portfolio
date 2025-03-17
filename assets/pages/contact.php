<?php
if (!empty($_POST['email'])){
    $email = htmlspecialchars($_POST['email']);


    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        #création de la requête sql
        $sql = "INSERT INTO email (email) VALUES ('$email');";
        #requête pour les doublons
        $double = "SELECT * FROM email WHERE email = '$email';";

        include '../int/database.php';

        $connexion -> query($sql);
    } else {
        echo "L'adresse e-mail n'est pas valide.";
    }
} else {
    echo 'Veuillez renseigner un mail valide.';
}
