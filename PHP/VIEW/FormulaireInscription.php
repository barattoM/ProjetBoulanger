<?php

echo '<form method="POST" action="index.php?page=ActionsUsers&typeAction=inscription">
<div class="contenu">
    <div class="espace"></div>
    <div class="contenuLigne colonne">
        <div class="ligne colonne centrer">
            <div class="label">Nom de l\'utilisateur</div>
            <input type="hidden" name="roleUser" value="1"/>
            <input type="texte" name="nomUser" placeholder="Nom" class="libelle" required/>
    </div>
    <div class="ligne colonne centrer">
            <div class="label">Prénom de l\'utilisateur</div>
            <input type="texte" name="prenomUser" placeholder="Prénom" class="libelle" required/>
    </div>
    <div class="ligne colonne centrer">
            <div class="label">Pseudo de l\'utilisateur</div>
            <input type="texte" name="pseudoUser" placeholder="Pseudo" class="libelle" required/>
    </div>
    <div class="ligne colonne centrer">
            <div class="label">Mot de passe de l\'utilisateur</div>
            <input type="password" name="mdpUser" placeholder="Mot de passe" class="libelle" required/>
    </div>
    <div class="ligne colonne centrer">
            <div class="label">Adresse mail de l\'utilisateur</div>
            <input type="text" name="adresseMailUser" placeholder="Mail" class="libelle" required/>
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