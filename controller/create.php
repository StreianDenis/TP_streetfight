<?php
$select = ["choix", "red" => "rouge", "blue" => "bleu"];
if (isset($_POST['btnCreate'])) {
    $personnages = new personnage();
    $formError = [];
    $formSuccess = array();
    if (isset($_POST['surname']) && !empty($_POST['surname'])) {
        $surname = htmlspecialchars($_POST['surname']);
    } else {
        $formError['surname'] = "Veuillez saisir un nom";
    }
    /* if(isset($_POST['color']) && !empty($_POST['color'])){
        $color = htmlspecialchars($_POST['color']);
    }else{
        //Sinon j'affiche un message d'erreur
        $formError['color'] = "Veuillez entrer une color";
    }*/

    if (empty($formError)) {
        $formSuccess['success'] = "Felicitation votre personnage a ete correctement creer !";
        $personnages->surname = $surname;
        $personnages->atk = 99;
        $personnages->life = '99';
        $personnages->color = 'rouge';
        $personnages->createPersonnage();
        header('location:index.php?list');
    }
}
