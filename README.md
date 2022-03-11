# Projet d'apprentissage de Symfony
## Pour récupérer le projet, faites la commande: 

git clone https://github.com/alexgaill/dwwm19-firstProject.git

### Une fois que vous avez le projet, vous devez exécuter les commandes suivantes:

- composer install pour installer toutes les dépendances du projet
- Il faut modifier la valeur de DATABASE_URL
- symfony console doctrine:database:create pour créer la BDD
- symfony console doctrine:migrations:migrate pour migrer les tables