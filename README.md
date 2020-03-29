# School Management System (SMS)
## Example app to understand usage of laravel app with Docker containers


# Frequently used Docker CMDs  
## ===========================================================================================================
## Followings are some frequently used docker cmmds
## ===========================================================================================================

# Docker Images list
## ================================================================================ 
    \> docker images
#### Image With locate ID    
    \> docker images -a   						 
#### Image Without Tag
    \> docker images -f dangling=true   	    
#### Image With Pattern
    \> docker images -a |  grep "pattern"   		

# Docker Delete Image
## ================================================================================ 
    \> docker rmi IMAGE_ID OR IMAGE_TAG

# To execute of Image
## ================================================================================ 
#### For Linux 
    \> docker run -d -it -p 30001:80 --name "moe-php-mysql-app" \
    -v "$(pwd)"/www:/var/www/html \
    amakundu/moe-php-mysql-demo:1.0.0
#### For Win Shell
    \> docker run -d -it -p 30001:80 --name "moe-php-mysql-app" -v /www:/var/www/html amakundu/moe-php-mysql-demo:1.0.0

# To see running container
## ================================================================================ 
    \> docker ps

# Delete container
## ================================================================================ 
    \> docker rm -f CONTAINER_ID

# Doker Compose
## ================================================================================ 
    \> docker-compose up --build

# Open a shell inside the running container
## ================================================================================ 
    \> docker exec -it <container-id> /bin/bash