<?php
if (isset($_SESSION['user']) && $_SESSION['user']->getRoleUser() == 3) {
   
echo '
<div class="contenu choixListe">
    <div class="espace"></div>
    <div class="ligne">
        <a href="index.php?page=ListeProduits"><div class="libelle centrer">'.texte('listeProduits').'</div></a>
        <div class="espace"></div>
        <a href="index.php?page=ListeIngredients"><div class="libelle centrer">'.texte('listeIngredients').'</div></a>
    </div>
    <div class="espace"></div>
</div>
';

} else {
    header("location:index.php?page=ListeProduits");
}
