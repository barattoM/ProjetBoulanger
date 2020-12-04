<?php
if (isset($_SESSION['user']) && $_SESSION['user']->getRoleUser() == 3) {
  

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
    <form method="POST" action="index.php?page=ActionsIngredients&mode=ajout">
      <div class="contenu">
        <div class="espace"></div>
        <div class="contenuLigne colonne">
          <div class="ligne colonne centrer">
			<div class="label">'.texte('libelle').'</div>
			<input type="text" class="libelle" name="libelleIngredient" placeholder="'.texte('libelle').'" required />
		  </div>

        </div>
        <div class="espace"></div>
	  </div>
	  <div class="contenuLigne">
		<div class="espacePB"></div>
		<div class="colonne">
			<a href="index.php?page=ListeIngredients"><div class="retour centrer contenuLigne">'.texte('retour').'</div></a>
			<input type="submit" name="submit" class="ajouter centrer contenuLigne" value="'.texte('ajouter').'"/>
		</div>
		<div class="espacePB"></div>
	  </div>
    </form>';
    

}
else if($mode=="modif")
{
    
    $idRecherche=$_GET['id'];
    $choix=IngredientsManager::findById($idRecherche);

    echo '
    <form method="POST" action="index.php?page=ActionsIngredients&mode=modif">


    <div class="contenu">
      <div class="espace"></div>
      <div class="contenuLigne colonne">
        <div class="ligne colonne centrer">
          <div class="label">'.texte('libelle').'</div>
          <input type="hidden" name="idIngredient" value="'.$choix->getIdIngredient().'"/>
          <input type="text" class="libelle" name="libelleIngredient" value="'.$choix->getLibelleIngredient().'"/>
          
        </div>

      </div>
      <div class="espace"></div>
    </div>
    <div class="contenuLigne">
      <div class="espacePB"></div>
      <div class="colonne">
          <a href="index.php?page=ListeIngredients"><div class="retour centrer contenuLigne">'.texte('retour').'</div></a>
          <input type="submit" name="submit" class="ajouter centrer contenuLigne" value="'.texte('modifier').'"/>
      </div>
      <div class="espacePB"></div>
    </div>
  </form>';
} 




else if($mode=="delete")
{
    
    $idRecherche=$_GET['id'];
    $choix=IngredientsManager::findById($idRecherche);

    echo '
    <form method="POST" action="index.php?page=ActionsIngredients&mode=delete">


    <div class="contenu">
      <div class="espace"></div>
      <div class="contenuLigne colonne">
        <div class="ligne colonne centrer">
          <div class="label">'.texte('libelle').'</div>
          <input type="text" class="libelle" name="libelleIngredient" value="'.$choix->getLibelleIngredient().'"disabled/>
        </div>

        <input type="hidden" name="idIngredient" value="'.$choix->getIdIngredient().'"/>

      </div>
      <div class="espace"></div>
    </div>
    <div class="contenuLigne">
      <div class="espacePB"></div>
      <div class="colonne">
          <a href="index.php?page=ListeIngredients"><div class="retour centrer contenuLigne">'.texte('retour').'</div></a>
          <input type="submit" name="Supprimer" class="ajouter centrer contenuLigne" value="'.texte('supprimer').'"/>
      </div>
      <div class="espacePB"></div>
    </div>
  </form>';
} 
} else {
  header("location:index.php?page=ListeProduits");
}