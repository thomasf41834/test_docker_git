// on crée un container à partir du Dockerfile

docker build -t img\_exemple -f Dockerfile .

// on lance l'exécution du container en créant un volume pour synchroniser le projet en local avec un dossier du container

docker run -v ~/Documents/test\_docker:/home/savecontainer --name cont\_exemple -id img\_exemple

//on entre dans le container

docker exec -it cont\_exemple /bin/bash

