<?php
$ingredients = IngredientsManager::getList();

echo '<div class="contenu colonne">
<div class="contenuLigne">
  <div class="espace"></div>
  <div class="ajouter centrer"><a href="index.php?page=FormulaireIngredients&typeFormulaire=ajouter">Ajouter</div>
  <div class="espace"></div>
</div>
<div>
  <div class="espace"></div>';

foreach ($ingredients as $unIngredient)
{

 echo ' <div class="contenuLigne">';
 echo '<div class="libelle centrer">'.$unIngredient->getLibelleIngredient().'</div>';
 echo '<div class="espace"></div>';
 echo '<div class="detail centrer"><a href="index.php?page=FormulaireIngredients&typeFormulaire=details&id='.$unIngredient->getIdIngredient().'">Détails</a></div>';
 echo ' <div class="espace"></div>';
 echo ' <div class="modifier centrer"><a href="index.php?page=FormulaireIngredients&typeFormulaire=modifier&id='.$unIngredient->getIdIngredient().'">Modifier</div>';
 echo ' <div class="espace"></div>';
 echo ' <div class="supprimer centrer"><a href="index.php?page=ActionsIngredients&typeTraitement=supprimer&id='.$unIngredient->getIdIngredient().'">Supprimer</div>';
 echo '</div>';

echo '<div class="espace"></div></div></div>';

}
echo '<div class="contenuLigne">';
echo '<div class="espace"></div>';
echo '<a href="index.php"><div class="retour centrer">Retour</div></a>';
echo '<div class="espace"></div>';
echo '</div>';

