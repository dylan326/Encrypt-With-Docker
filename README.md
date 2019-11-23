# Encryption program in docker container

Docker example with Apache, MySql 8.0, PhpMyAdmin and Php


I use docker-compose as an orchestrator. To run these containers:

```
Command after clone:  docker-compose up -d
```


Open web browser at [http://localhost:8001](http://localhost:8001)


No database is used in this program but it's avalible with the container

Open phpmyadmin at [http://localhost:8000](http://localhost:8000)

Run mysql client:

- `docker-compose exec db mysql -u root -p` 

Enjoy !

