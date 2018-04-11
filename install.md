# Personal Diablo Assistant

## Installation

### Etape 1: Récupérer le code

#### Option 1: Git


	git clone https://github.com/nWidart/pda.git folder-name
	

#### Option 2 : Télécharger le zip

Soit depuis Github
	
	https://github.com/nWidart/pda/archive/master.zip

Soit via le FTP HEAJ

### Etape 2: Utiliser Composer pour installer les dépendencies

#### Option 1: Composer n'est pas installé globalement

	cd folder-name
	curl -s http://getcomposer.org/installer | php
	php composer.phar install
	
#### Option 2: Composer est installé globalement

	cd folder-name
	composer install
	
	

### Etape 3: Créer la base de données

Il ne reste plus qu'à créer une BDD et de configurer Laravel. Après la création de la BDD, ouvrez le fichier `app/config/database.php` Et Mettez à jour les informations **mysql**.

### Etape 4: Importer le dump SQL

Importer le dump sql ci-joint dans votre base de données.

### Login
Vous pouvez vous logger avec:

	Login: n.widart@gmail.com
	PW: test
	
Ce compte contient déjà des personnages.
