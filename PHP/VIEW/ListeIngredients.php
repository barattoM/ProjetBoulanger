<?php

if (isset($_SESSION['user']) && $_SESSION['user']->getRoleUser() == 3){

$ingredients = IngredientsManager::getList();
echo '

<div class="contenu colonne">
<div class="contenuLigne">
<div class="espacePB"></div>
<a href="index.php?page=FormulaireIngredients&mode=ajout"><div class="ajouter centrer">'.texte("ajouter").'</div> </a>
<div class="espacePB"></div>
</div>
<div class="colonne">
';

foreach ($ingredients as $unIngredient)
{

echo '

<div class="contenuLigne">
<div class="espace"></div>
<div class="libelle centrer">'.$unIngredient->getLibelleIngredient().'</div>
<div class="espace"></div>
<a class="miniFlex" href="index.php?page=FormulaireIngredients&mode=modif&id='.$unIngredient->getIdIngredient().'"><div class="modifier centrer">'.texte("modifier").'</div></a>
<div class="espace"></div>
<a class="miniFlex" href="index.php?page=FormulaireIngredients&mode=delete&id='.$unIngredient->getIdIngredient().'"><div class="supprimer centrer">'.texte("supprimer").'</div></a>
<div class="espace"></div>
</div>
';}
echo'

<div class="espace"></div>';
      


echo '
</div>
<div class="contenuLigne">
<div class="espacePB"></div>
<a href="index.php?page=ChoixListe">
          <div class="retour centrer">'.texte("retour").'</div>
    </a>
<div class="espacePB"></div>
</div>
</div>
</div>
';
}else {
    header("location:index.php?page=ListeProduits");
} ;

