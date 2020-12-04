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

INSERT INTO produits (idProduit, libelleProduit, datePeremptionProduit, prixProduit) VALUES
(1, 'baguette', '2020-12-15', 1),
(2, 'chocolatine', '2020-12-12', 2),
(3, 'croissant', '2025-12-16', 200),
(4, 'sandwich', '2020-12-11', 5),
(5, 'cookie', '2020-12-12', 4),
(6, 'croissantine', '2020-12-13', 3),
(7, 'pain', '2020-12-10', 5);

INSERT INTO ingredients (idIngredient, libelleIngredient) VALUES
(1, 'farine'),
(2, 'oeuf'),
(3, 'beurre'),
(4, 'sucre'),
(5, 'levure'),
(6, 'chocolat'),
(7, 'sel'),
(8, 'garnitures'),
(9, 'levain');

INSERT INTO users (idUser, nomUser, prenomUser, pseudoUser, mdpUser, adresseMailUser, roleUser) VALUES
(1, 'Cugny', 'Maxime', 'Maxina', 'Glrv56zc', 'maxime.cgn@gmail.com', 1),
(2, 'Baratto', 'Marvine', 'Marvina', 'cookies', 'baratto.m@gmail.com', 2),
(3, 'Aarous', 'Sofiane', 'Sofia', '1234', 'sofiane.a@gmail.com', 3),
(4, 'Laforce', 'Amanda', 'Armando', 'motdepasse', 'amanda.l@gmail.com', 1);

INSERT INTO traductions (idTraduction, codeTexte, codeLangue, texte) VALUES

(null, 'Accueil', 'FR', 'Accueil'),
(null, 'Accueil', 'EN', 'Home'),
(null, 'bvn', 'FR', 'Bienvenue'),
(null, 'bvn', 'EN', 'Welcome'),
(null, 'accueil1', 'FR', "Bienvenue sur notre site « Boulanger », la meilleure boulangerie en ligne de la région !"),
(null, 'accueil2', 'FR', "Notre enseigne vous propose des produits de qualité à des prix imbattables."),
(null, 'accueil3', 'FR', "Nous travaillons avec les meilleurs producteurs locaux, vous ne trouverez pas mieux !"),
(null, 'accueil4', 'FR', "Toute ressemblance avec une entreprise spécialisée dans l\'électroménager existante ou ayant existé est purement fortuite."),
(null, 'accueil1', 'EN', 'Welcome on our website « Boulanger », the best online bakery in the region !'),
(null, 'accueil2', 'EN', 'Our brand offers you high quality products at unbeatable prices.'),
(null, 'accueil3', 'EN', 'We work closely with the best local producers, you cannot find better !'),
(null, 'accueil4', 'EN', 'Any similarity with another compagny specialised in high-tech and home appliance products is fortuitous.'),
(null, 'titreprojet', 'FR', 'Projet : '),
(null, 'titreprojet', 'EN', 'Project : '),
(null, 'projet1', 'FR', 'Notre projet est une gestion de boulangerie.'),
(null, 'projet2', 'FR', 'Chaque utilisateur possède un rôle différent. Il y a 3 rôles : client, vendeur et boulanger.'),
(null, 'projet3', 'FR', "Le client peut voir le détail d'un produit disponible."),
(null, 'projet4', 'FR', "Le vendeur peut voir le détail, et supprimer un produit quand il n'est plus disponible."),
(null, 'projet5', 'FR', 'Enfin, le boulanger peut supprimer, modifier et ajouter un produit.'),
(null, 'projet6', 'FR', 'La charte graphique du site sera orienté sur des couleurs chaleureuses et lumineuses. Encore une fois, toute ressemblance serait bien sûr dû au hasard.'),
(null, 'projet1', 'EN', 'Our project is a bakery management.'),
(null, 'projet2', 'EN', "Each user has a different role. There is 3 roles: customer, seller and baker."),
(null, 'projet3', 'EN', "The customer can view the details of a product available."),
(null, 'projet4', 'EN', "The seller can view the details, and delete a product when it's no longer available."),
(null, 'projet5', 'EN', 'Finally, the baker can delete, modify and add a product.'),
(null, 'projet6', 'EN', 'The design of the website will be oriented on warm and bright colors. Once again, of course any resemblance would be due to chance.'),
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
(null, 'retour', 'EN', 'Return'),
(null, 'envoyer', 'FR', 'Envoyer'),
(null, 'envoyer', 'EN', 'Send'),
(null, 'adresse', 'FR', 'Adresse'),
(null, 'adresse', 'EN', 'Adress'),
(null, 'reseaux', 'FR', 'Réseaux sociaux'),
(null, 'reseaux', 'EN', 'Social networks'),
(null, 'peremption', 'FR', 'Date de peremption'),
(null, 'peremption', 'EN', 'Expiration date'),
(null, 'prix', 'FR', 'Prix'),
(null, 'prix', 'EN', 'Price'),
(null, 'nom', 'FR', 'Nom'),
(null, 'nom', 'EN', 'Name'),
(null, 'prenom', 'FR', 'Prénom'),
(null, 'prenom', 'EN', 'First name'),
(null, 'pseudo', 'FR', 'Pseudo'),
(null, 'pseudo', 'EN', 'Nickname'),
(null, 'mdp', 'FR', 'Mot de passe'),
(null, 'mdp', 'EN', 'Password'),
(null, 'mail', 'FR', 'Adresse mail'),
(null, 'mail', 'EN', 'Mail'),
(null, 'deconnexion', 'FR', 'Deconnexion'),
(null, 'deconnexion', 'EN', 'Log out'),
(null, 'existedeja', 'FR', 'Le pseudo existe déjà'),
(null, 'existedeja', 'EN', 'Nickname already exists'),
(null, 'pseudouser', 'FR', "Pseudo de l'utilisateur"),
(null, 'pseudouser', 'EN', "User nickname"),
(null, 'nomuser', 'FR', "Nom de l'utilisateur"),
(null, 'nomuser', 'EN', "User name"),
(null, 'prenomuser', 'FR', "Prenom de l'utilisateur"),
(null, 'prenomuser', 'EN', "User first name"),
(null, 'mdpuser', 'FR', "Mot de passe de l'utilisateur"),
(null, 'mdpuser', 'EN', "User password"),
(null, 'mailuser', 'FR', "Adresse mail de l'utilisateur"),
(null, 'mailuser', 'EN', "User's mail"),
(null, 'connexionreussi', 'FR', 'Connexion réussi'),
(null, 'connexionreussi', 'EN', 'Successfully connected'),
(null, 'incorrectmdp', 'FR','Le mot de passe est incorrect'),
(null, 'incorrectmdp', 'EN', 'Uncorrect password'),
(null, 'pseudonone', 'FR', "Le pseudo n\'existe pas"),
(null, 'pseudonone', 'EN', 'The nickname does not exist'),
(null, 'listeProduits', 'FR', 'Liste des produits'),
(null, 'listeProduits', 'EN', 'Products List'),
(null, 'listeIngredients', 'FR', 'Liste des ingredients'),
(null, 'listeIngredients', 'EN', 'Ingredients List'),
(null, 'choixDesListes', 'FR', 'Choix des listes'),
(null, 'choixDesListes', 'EN', 'List choice'),
(null, 'noningredient', 'FR', "Pas d'ingredient renseigné"),
(null, 'noningredient', 'EN', "No ingredients specified"),
(null, 'Liste des produits', 'FR', "Liste des produits"),
(null, 'Liste des produits', 'EN', 'Products list'),
(null, 'Formulaire des produits', 'FR', 'Formulaire des produits'),
(null, 'Formulaire des produits', 'EN', 'Product form'),
(null, 'Liste des ingredients', 'FR', 'Liste des ingredients'),
(null, 'Liste des ingredients', 'EN', 'List of ingredients'),
(null, 'Formulaire des ingredients', 'FR', 'Formulaire des ingredients'),
(null, 'Formulaire des ingredients', 'EN', 'ingredients form'),
(null, 'Liste des ingredients du produit', 'FR', 'Liste des ingredients du produit'),
(null, 'Liste des ingredients du produit', 'EN', 'List ingredients of product'),
(null, 'Choix de la liste', 'FR', 'Choix de la liste'),
(null, 'Choix de la liste', 'EN', 'Choice from list'),
(null, 'findus', 'FR', 'Retrouvez-nous sur :'),
(null, 'findus', 'EN', 'Find us here :');

-- 02 12 2020


INSERT INTO contenances (idContenance, idProduit, idIngredient) VALUES
(1, 1, 5),
(2, 1, 1),
(3, 1, 9),
(4, 1, 7),
(5, 2, 1);
(6, 2, 5);
(7, 2, 9);
(8, 2, 7);
(9, 2, 6);
(10, 3, 1);
(11, 3, 2);
(12, 3, 4);
(13, 3, 5);

INSERT INTO consultations (idConsultation, idUser, idProduit) VALUES
(1, 1, 3),
(2, 2, 4);

INSERT INTO `users` (`idUser`, `nomUser`, `prenomUser`, `pseudoUser`, `mdpUser`, `adresseMailUser`, `roleUser`) VALUES (NULL, 'admin', 'admin', 'admin', 'ec6a6536ca304edf844d1d248a4f08dc', 'admin', '3') 
