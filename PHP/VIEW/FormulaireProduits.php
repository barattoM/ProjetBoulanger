<?php
$mode = $_GET['mode'];

switch ($mode){
case "ajout" :
    {
        echo '<form action="index.php?page=ActionsProduits&mode=ajoutProduit" method="POST">';
        break;
    }
case "detail" :
    {
        echo '<form method="POST" >';
        break;
    }
case "modif" :
    {
        echo '<form action="index.php?page=ActionsProduits&mode=modifProduit" method="POST">';
    break;
    }
case "delete" :
    {
        echo '<form action="index.php?page=ActionsProduits&mode=delProduit" method="POST">';
    break;
    }

}

if (isset($_GET['id']))
{
$choix = ProduitsManager::findById($_GET['id']);
$idProduit = $choix->getIdProduit();
}
?>
    <div class="contenu">
    <div class="espace"></div>
    <div class="contenuLigne colonne">

        <?php if($mode != "ajout") echo  '<input name= "idProduit" value="'.$idProduit.'"type= "hidden">';?>

        <div class="ligne colonne centrer">
          <div class="label">Libelle : </div>
          <input class="libelle" name="libelleProduit" <?php if($mode != "ajout") echo 'value= "'.$choix->getLibelleProduit().'"';if($mode=="detail" || $mode=="delete") echo '" disabled'; ?>/>
        </div>

        <div class="ligne colonne centrer">
          <div class="label">Date de peremption : </div>
          <input type="date" class="libelle" name="datePeremptionProduit" <?php if($mode != "ajout") echo 'value= "'.$choix->getDatePeremptionProduit().'"';if($mode=="detail" || $mode=="delete") echo '" disabled'; ?>/>
        </div>

        <div class="ligne colonne centrer">
          <div class="label">Prix : </div>
          <input class="libelle" name="PrixProduit" <?php if($mode != "ajout") echo 'value= "'.$choix->getPrixProduit().'"';if($mode=="detail" || $mode=="delete") echo '" disabled'; ?>/>
        </div>

    </div>
        <div class="espace"></div>
    </div>

    <div class="contenuLigne"> 
    <div class="espace"></div>
    <div class="colonne">
    <a href="index.php?page=ListeProduits">
          <div class="retour centrer">Retour</div>
    </a>
<?php 
// en fonction du mode, on affiche les boutons utiles
	switch ($mode) {
		case "ajout":
			{   
                echo '<input type="submit" name="Ajouter" class="ajouter centrer" value="Ajouter"/>';
                break;
			}
		case "modif":
			{
                echo '<input type="submit" name="Modifier" class="ajouter centrer" value="Modifier"/>';
                break;
			}
		case "delete":
			{
                echo '<input type="submit" name="Supprimer" class="ajouter centrer" value="Supprimer"/>';
                break;
			}
    }
?>
    </div>
    <div class="espace"></div>
  </div>
</form>

