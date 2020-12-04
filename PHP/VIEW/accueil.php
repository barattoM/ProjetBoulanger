<?php
echo '
<div class="accueil">

<div class="croissant2"><img src="IMG/croissant2.png" alt="CROISSANT"/></div>

<div class="presentation">

<h1>'.texte('accueil1') .'</h1>

<br><br>

<h3>
'.texte('accueil2') .'
<br>
'.texte('accueil3') .'
</h3>

<br><br><br>

<h5><strong>
'.texte('accueil4') .'
</strong></h5>

</div>

<div class="croissant"><img src="IMG/croissant.png" alt="CROISSANT"/></div>

<br><br><br><br><br><br><br>

</div>';
if (isset($_SESSION['user'])){
if ($_SESSION['user']->getRoleUser() < 3){
    echo'
<div class="contenuLigne">
    <div class="espacePB"></div>
    <a href="index.php?page=ListeProduits"><div class="libelle centrer">'.texte('listeProduits').'</div></a>
    <div class="espacePB"></div>
</div>';
}
if ($_SESSION['user']->getRoleUser() == 3){
    echo'
<div class="contenuLigne">
    <div class="espacePB"></div>
    <a href="index.php?page=ChoixListe"><div class="libelle centrer">'.texte('choixDesListes').'</div></a>
    <div class="espacePB"></div>
</div>

';
}}

echo'
<div class="projet">
<strong>'.texte('titreprojet') .'</strong>
<br><br>
'.texte('projet1').'
<br><br>
'.texte('projet2').'
<br><br>
'.texte('projet3').'
<br>
'.texte('projet4').'
<br>
'.texte('projet5').'
<br><br>
'.texte('projet6').'
</div>';

