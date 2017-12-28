CREATE TABLE contact(
	NumContact int NOT NULL UNIQUE, 
	NomContact varchar(255),
	PrenomContact varchar(255),
	NumTelContact varchar(255),
	MailContact varchar(255),
	NumEditeur int NOT NULL,
	PRIMARY KEY (NumContact)
	
);
CREATE TABLE editeur(
	NumEditeur int NOT NULL UNIQUE,
	NomEditeur varchar(255),
	VilleEditeur varchar(255),
	RueEditeur varchar(255),
	CodePostaleEditeur varchar(255),
	PRIMARY KEY (NumEditeur)
	
);
CREATE TABLE loger(
	IdLoger int NOT NULL UNIQUE,
	NumLogement int NOT NULL,
	NumReservation int NOT NULL,
	PlacesFrais int,
	PRIMARY KEY (IdLoger)

);
CREATE TABLE suivi(
	RefSuivi int NOT NULL UNIQUE,
	nustiu int,
	Relance bit,
	Reponse bit,
	NumEditeur int NOT NULL,
	PRIMARY KEY (RefSuivi)

);
CREATE TABLE logement(
	NumLogement int NOT NULL UNIQUE,
	VilleLogement varchar(255),
	RueLogement varchar(255),
	CodePostaleLogement varchar(255),
	NombreChambres int,
	CoutLongementNuit int,
	PRIMARY KEY (NumLogement)
);
CREATE TABLE reservation(
	NumReservation int NOT NULL UNIQUE,
	DateReservation date,
	Commenaire char(255),
	PrixEspace double,
	Statut bit,
	EtatFacture bit,
	PRIMARY KEY (NumReservation)

);
CREATE TABLE jeux(
	NumJeux int NOT NULL UNIQUE,
	NomJeux varchar(255),
	NombreJoueur int,
	DateSortie date,
	DureePartie int,
	NumEditeur int NOT NULL,
	CodeCategorie int NOT NULL,
	PRIMARY KEY (NumJeux)
);
CREATE TABLE categorie(
	CodeCategorie int NOT NULL UNIQUE,
	NomCategorie varchar(255),
	PRIMARY KEY (CodeCategorie)
);
CREATE TABLE festival(
	AnneFestival int NOT NULL UNIQUE,
	DateFestival date, 
	NombreTables int,
	PrixPlaceStandard double,
	PRIMARY KEY (AnneFestival)
);
CREATE TABLE zones(
	NumZones int NOT NULL UNIQUE,
	NomZones varchar(255),
	AnneFestival int,
	PRIMARY KEY (NumZones)
);
CREATE TABLE concerner(
	IdConcerner int NOT NULL UNIQUE,
	NumReservation int NOT NULL UNIQUE,
	NumJeux int NOT NULL UNIQUE,
	Nombre int, 
	Recu bit,
	Retour bit, 
	don bit,
	PRIMARY KEY (IdConcerner)
	
);
CREATE TABLE localiser(
	IdLocaliser int NOT NULL UNIQUE,
	NumReservation int NOT NULL UNIQUE,
	NumZones int NOT NULL UNIQUE,
	PRIMARY KEY (IdLocaliser)
	
);
CREATE TABLE regrouper (
	IdRegrouper int NOT NULL UNIQUE,
	NumEditeur int NOT NULL,
	NumZones int NOT NULL,
	PRIMARY KEY (IdRegrouper)
	
);

