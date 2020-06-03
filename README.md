# initialisation 
On se rend dans le projet git

On crée un container à partir du Dockerfile  
`docker build -t img_exemple -f Dockerfile .`  
On lance l'exécution du container en créant un volume pour synchroniser le projet en local avec un dossier du container  
`docker run -v `_chemin du projet git_`:/home/savecontainer --name cont_exemple -id img_exemple`  

Attention : Si vous avez un conflit avec le nom que vous avez indiqué pour le container :  
stopper le container ayant ce nom s'il est en exécution : `docker stop cont_exemple`  
supprimer ce container : `docker rm cont_exemple`

On entre dans le container  
`docker exec -it cont_exemple /bin/bash`  

# configuration de l'environnement 
On se rend dans le dossier synchronisé avec notre projet en local puis dans notre application laravel  
`cd /home/savecontainer/my_app`  
On met composer à jour  
`composer update`  
On lance la commande qui affiche la date  
`php artisan test_date`

# création de la base de données mysql
On se rend dans le dossier où se trouve le dockerfile  
`cd env_mysql`

`docker build -t mysql -f Dockerfile .`  
`docker run -v `_chemin du projet git_`/env_mysql:/home/savecontainer --name cont_mysql --env="MYSQL_ROOT_PASSWORD=password" -id mysql`  
On recherche l'adresse ip sur laquelle tourne notre container mysql  
`docker inspect cont_mysql | grep IPAddress` --> adresse_ip  
On se connecte au mysql  
`mysql -u root -ppassword -h `adresse_ip` -P 3306`  

# initialisation de la base de données
`CREATE DATABASE db_test;`  
`USE db_test;`  
`CREATE TABLE utilisateur  
(
    id INT PRIMARY KEY NOT NULL,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    email VARCHAR(255)
);`  
`INSERT INTO utilisateur VALUES ('1','ferrino', 'thomas', 'empail@hg.com');`
