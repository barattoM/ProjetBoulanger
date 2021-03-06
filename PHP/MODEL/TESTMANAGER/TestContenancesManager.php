<?php

//Test ContenancesManager

echo "recherche id = 1" . "<br>";
$obj =ContenancesManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Contenances(["idProduit" => "([value 1])", "idIngredient" => "([value 2])"]);
var_dump(ContenancesManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = ContenancesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setidProduit("[(Value)]");
ContenancesManager::update($obj);
$objUpdated = ContenancesManager::findById(1);
echo "Liste des objets" . "<br>";
$array = ContenancesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = ContenancesManager::findById(1);
ContenancesManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = ContenancesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>