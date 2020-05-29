# initialisation 
On crée un container à partir du Dockerfile  
`docker build -t img_exemple -f Dockerfile .`  
On lance l'exécution du container en créant un volume pour synchroniser le projet en local avec un dossier du container  
`docker run -v ~/Documents/test_docker:/home/savecontainer --name cont_exemple -id img_exemple`  
On entre dans le container  
`docker exec -it cont_exemple /bin/bash`  

# test de l'environnement 
On se rend dans le dossier synchronisé avec notre projet en local puis dans notre application laravel  
`cd home/savecontainer/my_app`  
On lance la commande qui affiche la date  
`php artisan test_date`
