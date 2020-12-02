<?php

if (isset($_GET['id']))
{
$choix = IngredientsManager::findById($_GET['id']);
$idProduit = $choix->getIdIngredient();
}

$mode=$_GET["mode"];
if ($mode=="ajout")
{
    $listeIngredient=IngredientsManager::getList();

    echo'
    <form method="POST" action="index.php?page=actionIngredients&mode=ajout">
      <div class="contenu">
        <div class="espace"></div>
        <div class="contenuLigne colonne">
          <div class="ligne colonne centrer">
			<div class="label">libelle</div>
			<input type="text" name="libelle" placeholder="Nom" required class="libelle"/>
		  </div>

        </div>
        <div class="espace"></div>
	  </div>
	  <div class="contenuLigne">
		<div class="espace"></div>
		<div class="colonne">
			<a href="index.php"><div class="retour centrer">Retour</div></a>
			<input type="submit" name="submit" class="ajouter centrer"/>
		</div>
		<div class="espace"></div>
	  </div>
    </form>';
    

}
else if($mode=="modif")
{
    $idRecherche=$_GET['id'];
    $id=IngredientsManager::findById($idRecherche);

    echo '
    <form method="POST" action="index.php?page=actionIngredients&mode=modif">


    <div class="contenu">
      <div class="espace"></div>
      <div class="contenuLigne colonne">
        <div class="ligne colonne centrer">
          <div class="label">libelle</div>
          <input type="text" name="libelle" placeholder="Nom" required class="libelle"/>
          <input type="hidden" name="id" value="'.$id->getIdIngredient().'"/>
          <input type="text" class="libelle" name="Libelle" value="'.$id->getLibelleIngredient().'"/>
          
        </div>

      </div>
      <div class="espace"></div>
    </div>
    <div class="contenuLigne">
      <div class="espace"></div>
      <div class="colonne">
          <a href="index.php"><div class="retour centrer">Retour</div></a>
          <input type="submit" name="submit" class="ajouter centrer"/>
      </div>
      <div class="espace"></div>
    </div>
  </form>';
} 


else if ($mode=="detail")
{
    $idRecherche=$_GET['id'];
    $id=IngredientsManager::findById($idRecherche);

    echo '
    <div class="contenu">
      <div class="espace"></div>
      <div class="contenuLigne colonne">
        <div class="ligne colonne centrer">
          <div class="label">libelle</div>
          <input type="text" class="libelle" name="Libelle" value="'.$id->getLibelleIngredient().'"disabled/>
        </div>

      </div>
      <div class="espace"></div>
    </div>
    <div class="contenuLigne">
      <div class="espace"></div>
      <div class="colonne">
          <a href="index.php"><div class="retour centrer">Retour</div></a>
          <input type="submit" name="submit" class="ajouter centrer"/>
      </div>
      <div class="espace"></div>
    </div>
  </form>
 ';

}