<?php

require("./Outils.php");

Parametres::init();

DbConnect::init();

session_start();

/******Les langues******/
/***On récupère la langue***/
if (isset($_GET['lang']))
{
	$_SESSION['lang'] = $_GET['lang'];
}

/***On récupère la langue de la session/FR par défaut***/
$lang=isset($_SESSION['lang']) ? $_SESSION['lang'] : 'FR';
/******Fin des langues******/

$routes=[
	"default"=>["PHP/VIEW/","FormulaireConnexion","Accueil"],

	"TestconsultationsManager"=>["PHP/MODEL/TESTMANAGER/","TestconsultationsManager","Test de consultations"],
	"TestcontenancesManager"=>["PHP/MODEL/TESTMANAGER/","TestcontenancesManager","Test de contenances"],
	"TestingredientsManager"=>["PHP/MODEL/TESTMANAGER/","TestingredientsManager","Test de ingredients"],
	"TestproduitsManager"=>["PHP/MODEL/TESTMANAGER/","TestproduitsManager","Test de produits"],
	"TesttraductionsManager"=>["PHP/MODEL/TESTMANAGER/","TesttraductionsManager","Test de traductions"],
	"TestusersManager"=>["PHP/MODEL/TESTMANAGER/","TestusersManager","Test de users"],

	"FormulaireInscription"=>["PHP/VIEW/","FormulaireInscription","Inscription"],
	"FormulaireConnexion"=>["PHP/VIEW/","FormulaireConnexion","Connexion"],
	"ActionsUsers"=>["PHP/VIEW/","ActionsUsers","User"],

	"ListeProduits"=>["PHP/VIEW/","ListeProduits","Liste des produits"],
	"FormulaireProduits"=>["PHP/VIEW/","FormulaireProduits","Formulaire des produits"],
	"ActionsProduits"=>["PHP/VIEW/","ActionsProduits","Actions des produits"],

	"ListeIngredients"=>["PHP/VIEW/","ListeIngredients","Liste des ingredients"],
	"FormulaireIngredients"=>["PHP/VIEW/","FormulaireIngredients","Formulaire des ingredients"],
	"ActionsIngredients"=>["PHP/VIEW/","ActionsIngredients","Actions des ingredients"],

	"ListeIngredientsProduit"=>["PHP/VIEW/","ListeIngredientsProduit","Liste des ingredients du produit"],

	"ChoixListe"=>["PHP/VIEW/","ChoixListe","Choix de la liste"],


];

if(isset($_GET["page"]))
{

	$page=$_GET["page"];

	if(isset($routes[$page]))
	{
		AfficherPage($routes[$page]);
	}
	else
	{
		AfficherPage($routes["default"]);
	}
}
else
{
	AfficherPage($routes["default"]);
}