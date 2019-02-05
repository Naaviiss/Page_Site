<?php
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sujet ='Votre message '.$prenom.' '.$nom.' !';
    
    if(mail($email,$sujet,$message)){
        echo 'message envoyé';
    }
?>