<?php

$typeAction = $_GET["typeAction"];
if ($typeAction == "inscription") {
    $p = UsersManager::findByPseudo($_POST['pseudoUser']);
    if ($p == false) {
        $user = new Users(["nomUser" => $_POST['nomUser'], "prenomUser" => $_POST['prenomUser'], "pseudoUser" => $_POST['pseudoUser'], "mdpUser" => crypte($_POST['mdpUser']), "adresseMailUser" => $_POST['adresseMailUser'], "roleUser" => $_POST['roleUser']]);
        UsersManager::add($user);
        header("refresh:3;url=index.php?page=default");
    } else {
        echo "Le pseudo existe déjà";
        header("refresh:3;url=index.php?page=default");
    }

} else if ($typeAction == "connexion") {
    $p = UsersManager::findByPseudo($_POST['pseudoUser']);
    if ($p != false) {
        if (crypte($_POST['mdpUser']) == $p->getMdpUser()) {
            echo "Connexion réussie";
            $_SESSION['user'] = $p;
            header("refresh:3;url=index.php?page=default");
        } else {
            echo "Le mot de passe est incorrect";
            header("refresh:3;url=index.php?page=default");
        }
    } else {
        echo "Le pseudo n'existe pas";
        header("refresh:3;url=index.php?page=default");
    }
}
