// on crée un container à partir du Dockerfile
docker build -t [nom de l'image] -f Dockerfile .
// on lance l'éxécution du container en créant un volume pour synchroniser le projet en local avec un dossier du container
docker run -v [chemin du projet]:[chemin de l'emplacement du dossier qui se synchronisera] --name [nom du container] -id [nom de l'image]
//on entre dans le container
docker exec -it [nom container] /bin/bash

