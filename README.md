# Langkah awal untuk memulai running website
## Build & Run
- docker-compose up -d

## Add to DB [Optional]
```bash
CREATE TABLE IF NOT EXISTS `ci_sessions` (
        `id` varchar(128) NOT NULL,
        `ip_address` varchar(45) NOT NULL,
        `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
        `data` blob NOT NULL,
        KEY `ci_sessions_timestamp` (`timestamp`)
);
```
## Run migration
```bash
[Migrasi All](http://localhost:8080/migrasi/all)
```
## Run Data Faker
```bash
[Load Data Users](http://localhost:8080/faker/users)
```
## Run on Server using custome network
```bash
docker network create nama-jaringan
```
```bash
docker run -d -p 8080:80 --network myjaringan nama_image:tag
```
```bash
docker run -d -p 3307:3306 --name mysql --network nama-jaringan \
    -e MYSQL_ROOT_PASSWORD=mypasswordroot \
    -e MYSQL_DATABASE=mydb \
    -e MYSQL_USER=mydbuser \
    -e MYSQL_PASSWORD=mypassworddb \
    -e TZ=Asia/Jakarta mysql:5.7
```
```bash
sudo docker exec -it CONTAINER_ID /bin/sh
```
