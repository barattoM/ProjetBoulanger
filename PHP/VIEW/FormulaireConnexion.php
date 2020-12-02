<?php

echo '<form method="POST" action="index.php?page=ActionsUsers&typeAction=connexion">
<div class="contenu">
    <div class="espace"></div>
    <div class="contenuLigne colonne">
    <div class="ligne colonne centrer">
            <div class="label">Pseudo de l\'utilisateur</div>
            <input type="texte" name="pseudoUser" placeholder="Pseudo" class="libelle" required/>
    </div>
    <div class="ligne colonne centrer">
            <div class="label">Mot de passe de l\'utilisateur</div>
            <input type="password" name="mdpUser" placeholder="Mot de passe" class="libelle" required/>
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