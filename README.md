
## Symfony mysql ngingx boilerplate on docker with rabbitmq
#### To start run:
```cd app```
#### Create env file and change required fields 
```cp .env.example .env```
```sudo docker-compose build```
#### Then install dependencies
```composer install```
#### Start the containers
```docker-compose up```

### Rabbitmq
To open rabbitmq dashboard:
``````
symfony open:local:rabbitmq
``````

### Adminer
```http://localhost:3000/```

#### If you have any problems with amqp
```sudo apt install php-amqp -y```