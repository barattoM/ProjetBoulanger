<?php

//Test UsersManager

echo "recherche id = 1" . "<br>";
$obj =UsersManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Users(["nomUser" => "toto", "prenomUser" => "toto", "pseudoUser" => "test", "mdpUser" => "123", "adresseMailUser" => "dada@da", "roleUser" => 1]);
var_dump(UsersManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = UsersManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setnomUser("tata");
UsersManager::update($obj);
$objUpdated = UsersManager::findById(1);
echo "Liste des objets" . "<br>";
$array = UsersManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = UsersManager::findById(3);
UsersManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = UsersManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>