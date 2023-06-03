# Poulailler - MMA

## Prerequisites
- [Docker](https://docs.docker.com/desktop/) version 23.0.0 or higher

## Installation

- > ```git clone https://github.com/your_username_/Project-Name.git```
- > ``` cd my-project/```
- > Create a .env.local file
    - > ``` DATABASE_URL="mysql://root:@symfony_dockerized-db-1:3306/poulailler_db?serverVersion=8.0.32&charset=utf8mb4" ```
- > ``` cd .docker/ ```
    - > Create a .env.nginx.local
        - > ``` NGINX_BACKEND_DOMAIN='localhost' ```
- > ``` docker ps ```
    - > Get the php container ID
        - > ``` docker exec -ti <container_id> bash  ```
            - > ``` composer install ```
    - > ``` docker compose up ```
- > Go on ``` http://localhost/ ```

## Basic Usage
- List all running containers
    - ``` docker ps ```
- Start bash shell inside container
    - ``` docker exec -ti <container_id> bash ```
- Remove containers
    - ``` docker compose down ```  

