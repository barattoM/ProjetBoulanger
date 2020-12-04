<?php

$uri = $_SERVER['REQUEST_URI'];
if (substr($uri, strlen($uri) - 1) == "/") {
  $uri .= "index.php?";
} else if (in_array("?", str_split($uri))) {
  $uri .= "&";
} else {
  $uri .= "?";
}

?>

<body>
  <header>
    <div class="image">
      <a href="index.php?page=accueil"><img src="IMG/logoBoulanger.png" alt="Logo de la boulangerie" /></a>
    </div>
    <div class="titre centrer">
      <h1><?php echo texte($titre); ?></h1>
    </div>
    <div class="centrer">

      <?php

      // Ne pas afficher l'icone de la langue actuelle
      if (isset($_SESSION["lang"]))
      {
        if ($_SESSION["lang"] == "EN")
        {
          echo '<a href="'.$uri.'lang=FR"><img src="IMG/french.png" alt="Petit marin français"/></a>';
        }
        else
        {
          echo '<a href="'.$uri.'lang=EN"><img src="IMG/english.png" alt="Petit soldat anglais"/></a>';
        }
      } 
      else 
      {
        echo '<a href="'.$uri.'lang=EN"><img src="IMG/english.png" alt="Petit soldat anglais"/></a>';
      }
      if(isset($_GET['lang'])){
        if($_GET['lang']=="EN"){
          $_SESSION["lang"] = "EN";
        }
        else{
          $_SESSION["lang"] = "FR";
        }
      }



      ?>
    </div>
    <div class="colonne centrer">
      <?php if (isset($_SESSION['user'])) {
        echo '
        <a href="index.php?page=ActionsUsers&typeAction=deconnexion"
          ><div class="button centrer">' . texte("deconnexion") . '</div></a
        >
    ';
      } else {
        echo '<a href="index.php?page=FormulaireInscription"
          ><div class="button centrer">' . texte("inscription") . '</div></a
        >
        <a href="index.php?page=FormulaireConnexion"
          ><div class="button centrer">' . texte("connexion") . '</div></a
        >';
      }

      ?>
    </div>
  </header>