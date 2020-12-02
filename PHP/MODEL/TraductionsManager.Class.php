<?php

class TraductionsManager 
{
	public static function add(Traductions $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Traductions (codeTexte,codeLangue,texte) VALUES (:codeTexte,:codeLangue,:texte)");
		$q->bindValue(":codeTexte", $obj->getCodeTexte());
		$q->bindValue(":codeLangue", $obj->getCodeLangue());
		$q->bindValue(":texte", $obj->getTexte());
		$q->execute();
	}

	public static function update(Traductions $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Traductions SET idTraduction=:idTraduction,codeTexte=:codeTexte,codeLangue=:codeLangue,texte=:texte WHERE idTraduction=:idTraduction");
		$q->bindValue(":idTraduction", $obj->getIdTraduction());
		$q->bindValue(":codeTexte", $obj->getCodeTexte());
		$q->bindValue(":codeLangue", $obj->getCodeLangue());
		$q->bindValue(":texte", $obj->getTexte());
		$q->execute();
	}
	public static function delete(Traductions $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Traductions WHERE idTraduction=" .$obj->getIdTraduction());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Traductions WHERE idTraduction =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Traductions($results);
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
		$q = $db->query("SELECT * FROM Traductions");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Traductions($donnees);
			}
		}
		return $liste;
	}

	public static function findByCodes($codeLangue,$codeTexte)
	{
		$db=DbConnect::getDb();
		$q=$db->prepare("SELECT texte FROM Traductions WHERE codeTexte =:codeTexte and codeLangue = :codeLangue");
		$q->bindValue(":codeTexte", $codeTexte,PDO::PARAM_STR);
		$q->bindValue(":codeLangue", $codeLangue,PDO::PARAM_STR);
		$q->execute();
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			
			return $results['texte'];  // on ne retourne que le texte, pas un objet
		}
		else
		{
			return false;
		}
	}
}