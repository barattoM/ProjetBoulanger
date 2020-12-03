<?php
var_dump($_POST);
$p = new Ingredients($_POST);
 var_dump($p);
switch ($_GET['mode']) {
    case "ajout":
        {
            IngredientsManager::add($p);
            break;
        }
    case "modif":
        {   
            IngredientsManager::update($p);
            break;
        }
    case "delete":
        {
            //On récupère toute les contenances pour le produit
            $contenances=ContenancesManager::getByIngredient($p);
            //On supprime les contenances du produit
            foreach($contenances as $contenance){
                ContenancesManager::delete($contenance);
            }
            IngredientsManager::delete($p);
            break;
        }
}

header("location:index.php?page=ListeIngredients");