<?php
if (isset($_SESSION['user'])) {
$mode = $_GET['mode'];    
//sécurité utilisateur
if($_SESSION['user']->getRoleUser() == 1 && $mode!="detail"){
    header("location:index.php?page=ListeProduits");
}   
//sécurité Vendeur
if(($_SESSION['user']->getRoleUser() == 2 && $mode="ajout") || ($_SESSION['user']->getRoleUser() == 2 && $mode="modif")){
    header("location:index.php?page=ListeProduits");
}   

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

        <?php if($mode != "ajout") echo  '<input name= "idProduit" value="'.$idProduit.'"type= "hidden" >';?>

        <div class="ligne colonne centrer">
          <div class="label"><?php echo texte('libelle');?> : </div>
          <input class="libelle" required name="libelleProduit" <?php if($mode != "ajout") echo 'value= "'.$choix->getLibelleProduit().'"';if($mode=="detail" || $mode=="delete") echo '" disabled'; ?>/>
        </div>

        <div class="ligne colonne centrer">
          <div class="label"><?php echo texte('peremption');?> : </div>
          <input type="date" required class="libelle" name="datePeremptionProduit" <?php if($mode != "ajout") echo 'value= "'.$choix->getDatePeremptionProduit().'"';if($mode=="detail" || $mode=="delete") echo '" disabled'; ?>/>
        </div>

        <div class="ligne colonne centrer">
          <div class="label"><?php echo texte('prix');?> : </div>
          <input class="libelle" required name="PrixProduit" <?php if($mode != "ajout") echo 'value= "'.$choix->getPrixProduit().'"';if($mode=="detail" || $mode=="delete") echo '" disabled'; ?>/>
        </div>

    </div>
        <div class="espace"></div>
    </div>

    <div class="contenuLigne"> 
    <div class="espace"></div>
    <div class="colonne">
    <a href="index.php?page=ListeProduits">
          <div class="retour centrer"><?php echo texte('retour');?></div>
    </a>
    <?php if($mode=="detail"){
        echo '<a href=index.php?page=ListeIngredientsProduit&idProduit='.$choix->getIdProduit().'>
          <div class="retour centrer">'.texte('listeIngredients').'</div>
    </a>';
    }
    
    ?>
<?php 
// en fonction du mode, on affiche les boutons utiles
	switch ($mode) {
		case "ajout":
			{   
                echo '<input type="submit" name="Ajouter" class="ajouter centrer" value="'.texte('ajouter').'"/>';
                break;
			}
		case "modif":
			{
                echo '<input type="submit" name="Modifier" class="ajouter centrer" value="'.texte('modifier').'"/>';
                break;
			}
		case "delete":
			{
                echo '<input type="submit" name="Supprimer" class="ajouter centrer" value="'.texte('supprimer').'"/>';
                break;
			}
    }
    } else {
    header("location:index.php?page=ListeProduits");
}
?>
    </div>
    <div class="espace"></div>
  </div>
</form>

