<?php
if (!isset($_SESSION['user'])){
  header("location:index.php?page=FormulaireConnexion");
} else {
$produits = ProduitsManager::getList();
echo '<div class="contenu colonne">
      <div class="contenuLigne">
        <div class="espacePB"></div>';
if (isset($_SESSION['user']) && $_SESSION['user']->getRoleUser() == 3) {
    echo '
         <a href="index.php?page=FormulaireProduits&mode=ajout"><div class="ajouter centrer">'.texte("ajouter").'</div> </a>
        ';}
echo '
         <div class="espacePB"></div>
      </div>
      <div class="colonne">';
foreach ($produits as $unProduit) {
    echo '<div class="espace"></div>
            <div class="contenuLigne">
            <div class="espace"></div>
            <div class="libelle centrer">' . $unProduit->getLibelleProduit() . '</div>
            <div class="espace"></div>
            <a href="index.php?page=FormulaireProduits&mode=detail&id=' . $unProduit->getIdProduit() . '"><div class="detail centrer">'.texte("details").'</div></a>
            <div class="espace"></div>';
    if (isset($_SESSION['user']) && $_SESSION['user']->getRoleUser() > 1) {
        echo '

            <a href="index.php?page=FormulaireProduits&mode=modif&id=' . $unProduit->getIdProduit() . '"><div class="modifier centrer">'.texte("modifier").'</div></a>
            <div class="espace"></div>';
            if (isset($_SESSION['user']) && $_SESSION['user']->getRoleUser() == 3) {
            echo '<a href="index.php?page=FormulaireProduits&mode=delete&id=' . $unProduit->getIdProduit() . '"><div class="supprimer centrer">'.texte("supprimer").'</div></a>
            <div class="espace"></div>
            ';
            }
          }
            echo '</div>
    <div class="espace"></div>';

}
if ($_SESSION['user']->getRoleUser() == 3){
  echo'
<div class="contenuLigne">
<div class="espacePB"></div>
<a href="index.php?page=ChoixListe">
        <div class="retour centrer">'.texte("retour").'</div>
  </a>
<div class="espacePB"></div>
</div>
</div>
</div>
';}
echo '</div>
</div>';}
