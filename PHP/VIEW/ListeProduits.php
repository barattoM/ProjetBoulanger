<?php
$produits = ProduitsManager::getList();
echo '<div class="contenu colonne">
      <div class="contenuLigne">
        <div class="espace"></div>
         <a href="index.php?page=FormulaireProduits&mode=ajout"><div class="ajouter centrer">Ajouter</div> </a>
        <div class="espace"></div>
      </div>
      <div class="colonne">';
      foreach($produits as $unProduit){
        echo '<div class="espace"></div>
            <div class="contenuLigne">
            <div class="libelle centrer">'.$unProduit->getLibelleProduit().'</div>
            <div class="espace"></div>
            <a href="index.php?page=FormulaireProduits&mode=detail&id='.$unProduit->getIdProduit().'"><div class="detail centrer">Detail</div></a>
            <div class="espace"></div>
            <a href="index.php?page=FormulaireProduits&mode=modif&id='.$unProduit->getIdProduit().'"><div class="modifier centrer">Modifier</div></a>
            <div class="espace"></div>
            <a href="index.php?page=FormulaireProduits&mode=delete&id='.$unProduit->getIdProduit().'"><div class="supprimer centrer">Supprimer</div></a>
            </div>
            <div class="espace"></div>';      
      }
        
      echo '</div>
</div>';