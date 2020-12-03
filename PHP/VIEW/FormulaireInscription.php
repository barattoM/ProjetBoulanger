<?php

echo '<form method="POST" action="index.php?page=ActionsUsers&typeAction=inscription">
<div class="contenu colonne">
    <div class="espace"></div>
    <div class="contenuLigne colonne">
        <div class="ligne colonne centrer">
            <div class="label">'.texte('nomuser').'</div>
            <input type="hidden" name="roleUser" value="1"/>
            <input type="texte" name="nomUser" placeholder="'.texte('nom').'" class="libelle" required/>
    </div>
    <div class="ligne colonne centrer">
            <div class="label">'.texte('prenomuser').'</div>
            <input type="texte" name="prenomUser" placeholder="'.texte('prenom').'" class="libelle" required/>
    </div>
    <div class="ligne colonne centrer">
            <div class="label">'.texte('pseudouser').'</div>
            <input type="texte" name="pseudoUser" placeholder="'.texte('pseudo').'" class="libelle" required/>
    </div>
    <div class="ligne colonne centrer">
            <div class="label">'.texte('mdpuser').'</div>
            <input type="password" name="mdpUser" placeholder="'.texte('mdp').'" class="libelle" required/>
    </div>
    <div class="ligne colonne centrer">
            <div class="label">'.texte('mailuser').'</div>
            <input type="text" name="adresseMailUser" placeholder="'.texte('mail').'" class="libelle" required/>
    </div>
    
    </div>
    <div class="espace"></div>
</div>
<div class="contenuLigne">
<div class="espace"></div>
<div class="colonne">
    <a href="index.php"><div class="retour centrer">'.texte('retour').'</div></a>
    <input type="submit" name="submit" class="ajouter centrer" value="'.texte('inscription').'"/>
</div>
<div class="espace"></div>
</div>
</form>
';