<?php
if (isset($_SESSION['user'])){

    // On recherche l'id du produit
    $recherche = ProduitsManager::findById($_GET['idProduit']);
    $contenances=ContenancesManager::getByProduit($recherche);
 

    // On récupère les id ingrédients qui ont l'id du produit dans la table contenances
 
    foreach ($contenances as $uneContenance)
    {
        $liste[]=$uneContenance->getIdIngredient();
    }

    
if (empty($liste)==false)
{


    foreach ($liste as $id)
    {
        
       $unIngredient=IngredientsManager::findById($id);

    echo '
    <div class="contenuLigne">
    <div class="espacePB"></div>
    <div class="libelle centrer">'.$unIngredient->getLibelleIngredient().'</div>
    <div class="espacePB"></div>
    </div>
    ';
    } 
}else {
        echo '<div class="contenuLigne">';
        echo '<div class="espacePB"></div>';
        echo '<div class="libelle centrer">'.texte('noningredient').'</div>';
        echo '<div class="espacePB"></div>';
        echo '</div>';
    }
    echo'<div class="espacePB"></div>';
    echo '
    </div>
    <div class="contenuLigne">
    <div class="espacePB"></div>
    <a href="index.php?page=FormulaireProduits&mode=detail&id='.$_GET['idProduit'].'">
              <div class="retour centrer">'.texte('retour').'</div>
        </a>
    <div class="espacePB"></div>
    </div>
    </div>
    </div>';
}

    
    