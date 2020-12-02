#------------------------------------------------------------
#-- la base de donnée s'appelle boulangerie
#------------------------------------------------------------

DROP DATABASE IF EXISTS boulangerie;

CREATE DATABASE boulangerie;

USE boulangerie;



CREATE TABLE produits
(
        idProduit      Int Auto_increment  NOT NULL PRIMARY KEY,
        libelleProduit        Varchar (50) NOT NULL ,
        datePeremptionProduit Date NOT NULL ,
        prixProduit           Int NOT NULL
)
ENGINE=INNODB DEFAULT CHARSET=UTF8;



CREATE TABLE ingredients
(
        idIngredient              Int Auto_increment  NOT NULL PRIMARY KEY,
        libelleIngredient Varchar (50) NOT NULL
)
ENGINE=INNODB DEFAULT CHARSET=UTF8;



CREATE TABLE users
(
        idUser      Int Auto_increment  NOT NULL PRIMARY KEY,
        nomUser         Varchar (50) NOT NULL ,
        prenomUser      Varchar (50) NOT NULL ,
        pseudoUser      Varchar (50) NOT NULL ,
        mdpUser         Varchar (50) NOT NULL ,
        adresseMailUser Varchar (100) NOT NULL ,
        roleUser        Int NOT NULL
)
ENGINE=INNODB DEFAULT CHARSET=UTF8;

CREATE TABLE traductions
(
        idTraduction   Int Auto_increment  NOT NULL PRIMARY KEY,
        codeTexte    Varchar (50) NOT NULL ,
        codeLangue   Varchar (5) NOT NULL ,
        texte        Text NOT NULL
)
ENGINE=INNODB DEFAULT CHARSET=UTF8;

CREATE TABLE contenances
(
        idContenance      Int Auto_increment  NOT NULL PRIMARY KEY,
        idProduit    Int NOT NULL ,
        idIngredient Int NOT NULL
)

ENGINE=INNODB DEFAULT CHARSET=UTF8;

CREATE TABLE consultations
(
        idConsultation        Int Auto_increment  NOT NULL PRIMARY KEY,
        idUser    Int NOT NULL ,
        idProduit Int NOT NULL
)
        
ENGINE=INNODB DEFAULT CHARSET=UTF8;


ALTER TABLE boulangerie.contenances ADD CONSTRAINT contenances_produits_FK FOREIGN KEY (idProduit) REFERENCES produits(idProduit);
ALTER TABLE boulangerie.contenances ADD CONSTRAINT contenances_ingredients_FK FOREIGN KEY (idIngredient) REFERENCES ingredients(idIngredient);
ALTER TABLE boulangerie.consultations ADD CONSTRAINT consultations_users_FK FOREIGN KEY (idUser) REFERENCES users(idUser);
ALTER TABLE boulangerie.consultations ADD CONSTRAINT consultations_produits_FK FOREIGN KEY (idProduit) REFERENCES produits(idProduit);



-- Insertion dans l'ordre

INSERT INTO produits (idProduit, libelleProduit, datePeremptionProduit, prixProduit) VALUES (1, 'baguette', '2020-12-15', 1);
(2, 'chocolatine', '2020-12-12', 2);
(3, 'croissant', '2025-12-16', 200);
(4, 'sandwich', '2020-12-11', 5);

INSERT INTO ingredients (idIngredient, libelleIngredient) VALUES
(1, 'farine');
(2, 'oeuf');
(3, 'beurre');
(4, 'sucre');

INSERT INTO users (idUser, nomUser, prenomUser, pseudoUser, mdpUser, adresseMailUser, roleUser) VALUES
(1, 'Cugny', 'Maxime', 'Maxina', 'Glrv56zc', 'maxime.cgn@gmail.com', 1);
(2, 'Baratto', 'Marvine', 'Marvina', 'cookies', 'baratto.m@gmail.com', 2);

INSERT INTO traductions (idTraduction, codeTexte, codeLangue, texte) VALUES
(null, 'accueil', 'FR', 'Bienvenue'),
(null, 'accueil', 'EN', 'Welcome'),
(null, 'inscription', 'FR', 'Inscription'),
(null, 'inscription', 'EN', 'Register'),
(null, 'connexion', 'FR', 'Connexion'),
(null, 'connexion', 'EN', 'Log in'),
(null, 'ajouter', 'FR', 'Ajouter'),
(null, 'ajouter', 'EN', 'Add'),
(null, 'libelle', 'FR', 'Libelle'),
(null, 'libelle', 'EN', 'Product name'),
(null, 'details', 'FR', 'Détails'),
(null, 'details', 'EN', 'Details'),
(null, 'modifier', 'FR', 'Modifier'),
(null, 'modifier', 'EN', 'Edit'),
(null, 'supprimer', 'FR', 'Supprimer'),
(null, 'supprimer', 'EN', 'Delete'),
(null, 'retour', 'FR', 'Retour'),
(null, 'retour', 'EN', 'Back'),
(null, 'envoyer', 'FR', 'Envoyer'),
(null, 'envoyer', 'EN', 'Send'),
(null, 'adresse', 'FR', 'Adresse'),
(null, 'adresse', 'EN', 'Adress'),
(null, 'reseaux', 'FR', 'Réseaux sociaux'),
(null, 'reseaux', 'EN', 'Social networks');


INSERT INTO contenances (idContenance, idProduit, idIngredient) VALUES
(1, 1, 2);
(2, 2, 2);
(3, 3, 1);
(4, 4, 3);
(5, 1, 4);

INSERT INTO consultations (idConsultation, idUser, idProduit) VALUES
(1, 1, 3);
(2, 2, 4);