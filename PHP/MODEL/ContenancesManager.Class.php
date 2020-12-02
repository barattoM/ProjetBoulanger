<?php

class ContenancesManager 
{
	public static function add(Contenances $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Contenances (idProduit,idIngredient) VALUES (:idProduit,:idIngredient)");
		$q->bindValue(":idProduit", $obj->getIdProduit());
		$q->bindValue(":idIngredient", $obj->getIdIngredient());
		$q->execute();
	}

	public static function update(Contenances $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Contenances SET idContenance=:idContenance,idProduit=:idProduit,idIngredient=:idIngredient WHERE idContenance=:idContenance");
		$q->bindValue(":idContenance", $obj->getIdContenance());
		$q->bindValue(":idProduit", $obj->getIdProduit());
		$q->bindValue(":idIngredient", $obj->getIdIngredient());
		$q->execute();
	}
	public static function delete(Contenances $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Contenances WHERE idContenance=" .$obj->getIdContenance());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Contenances WHERE idContenance =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Contenances($results);
		}
		else
		{
			return false;
		}
	}
	public static function getList()
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM Contenances");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Contenances($donnees);
			}
		}
		return $liste;
	}
}