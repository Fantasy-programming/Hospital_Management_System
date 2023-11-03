# Turing Hospital HMS

This is an hospital management system written in php (incomplete). It comprises 7 moludes:

- [ ] Admin module
- [ ] Doctors module
- [ ] Patients module
- [ ] Nurses module
- [ ] Accountants module
- [ ] Pharmacists module
- [ ] Laboratorists module

## Images

## How to run it

First, get the code on your machine

```bash
git clone https://github.com/Fantasy-programming/TuringHMS.git
cd TuringHMS
```

#### Method 1 (Docker)

- Change the environment variables in the `docker-compose.yml` and in `app/config.php` if wanted.

- Now run it
```bash
docker compose up
```
- Open http://localhost:40001 and to confirm that everything is running

#### Method 2 (Your choice)

- Get the code
- Configure your own server and DB
- Import the database schemas located in the `mysql` directory
- Copy the content of the app directory to your server
- Start serving all your request to the `public` directory `index.php`


## Stack 🎉

- JHC (Javascript, Html, Css)
- VanJS
- PHP
- MariaDB
- Docker
- Nginx