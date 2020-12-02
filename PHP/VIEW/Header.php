<body>
    <header>
      <div class="image">
        <img src="IMG/logoBoulanger.png" alt="Logo de la boulangerie" />
      </div>
      <div class="titre centrer"><h1>Accueil</h1></div>
      <div class="centrer">
        <a href=""
          ><img src="IMG/english.png" alt="Petit soldat anglais"
        /></a>
        <a href=""
          ><img src="IMG/french.png" alt="Petit marin français"
        /></a>
      </div>
      <div class="colonne centrer">
      <?php if (isset($_SESSION['user'])) {echo '
        <a href="index.php?page=ActionsUsers&typeAction=deconnexion"
          ><div class="button centrer">Déconnexion</div></a
        >
    ';
} else {
    echo '<a href="index.php?page=FormulaireInscription"
          ><div class="button centrer">Inscription</div></a
        >
        <a href="index.php?page=FormulaireConnexion"
          ><div class="button centrer">Connexion</div></a
        >';
}

?>
      </div>
    </header>