<?php

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
		  <div class="ligne colonne centrer">
			<div class="label">nom</div>
			<input type="text" name="nomUser" placeholder="Nom" required class="libelle"/>
          </div>
          <div class="ligne colonne centrer">
            <div class="label">nom</div>
            <input type="text" name="nomUser" placeholder="Nom" required class="libelle"/>
                </div>
                <div class="ligne colonne centrer">
                  <div class="label">nom</div>
                  <input type="text" name="nomUser" placeholder="Nom" required class="libelle"/>
                      </div>
                      <div class="ligne colonne centrer">
                        <div class="label">nom</div>
                        <input type="text" name="nomUser" placeholder="Nom" required class="libelle"/>
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

    echo '


    ';
} else if ($mode=="detail")
{

    echo '
    ';
}
