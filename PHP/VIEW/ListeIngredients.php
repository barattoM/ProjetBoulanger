<?php
$ingredients = IngredientsManager::getList();

echo '
<div class="contenu colonne">
<div class="contenuLigne">
<div class="espace"></div>
<a href="index.php?page=FormulaireIngredients&mode=ajout"><div class="ajouter centrer">Ajouter</div> </a>
<div class="espace"></div>
</div>
<div class="colonne">
';

foreach ($ingredients as $unIngredient)
{

echo '
<div class="espace"></div>
<div class="contenuLigne">
<div class="libelle centrer">'.$unIngredient->getLibelleIngredient().'</div>
<div class="espace"></div>
<a href="index.php?page=FormulaireIngredients&mode=modif&id='.$unIngredient->getIdIngredient().'"><div class="modifier centrer">Modifier</div></a>
<div class="espace"></div>
<a href="index.php?page=ActionIngredients&mode=delete&id='.$unIngredient->getIdIngredient().'"><div class="supprimer centrer">Supprimer</div></a>
</div>
<div class="espace"></div>';      
}

echo '
</div>
</div>
';

