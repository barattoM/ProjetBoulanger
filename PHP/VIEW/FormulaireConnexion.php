<?php

echo '<form method="POST" action="index.php?page=ActionsUsers&typeAction=connexion">
<div class="contenu">
    <div class="espace"></div>
    <div class="contenuLigne colonne">
    <div class="ligne colonne centrer">
            <div class="label">'.texte('pseudouser') .'</div>
            <input type="texte" name="pseudoUser" placeholder="'.texte('pseudouser') .'" class="libelle" required/>
    </div>
    <div class="ligne colonne centrer">
            <div class="label">'.texte('mdp').'</div>
            <input type="password" name="mdpUser" placeholder="'.texte('mdp').'" class="libelle" required/>
    </div>
    </div>
    <div class="espace"></div>
</div>
<div class="contenuLigne">
<div class="espace"></div>
<div class="colonne">
    <a href="index.php"><div class="retour centrer">'.texte('retour').'</div></a>
    <input type="submit" name="submit" class="ajouter centrer contenuLigne" value="'.texte('connexion').'"/>
</div>
<div class="espace"></div>
</div>
</form>
';