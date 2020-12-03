<?php
var_dump($_POST);
$p = new Produits($_POST);
 var_dump($p);
switch ($_GET['mode']) {
    case "ajoutProduit":
        {
            ProduitsManager::add($p);
            break;
        }
    case "modifProduit":
        {   
            ProduitsManager::update($p);
            break;
        }
    case "delProduit":
        {
            //On récupère toute les consultation pour le produit
            $consultations=ConsultationsManager::getByProduit($p);
            //On supprime les consultation du produit
            foreach($consultations as $consultation){
                ConsultationsManager::delete($consultation);
            }
            //On récupère toute les contenances pour le produit
            $contenances=ContenancesManager::getByProduit($p);
            //On supprime les contenances du produit
            foreach($contenances as $contenances){
                ContenancesManager::delete($contenances);
            }
            ProduitsManager::delete($p);
            break;
        }
}

header("location:index.php?page=ListeProduits");