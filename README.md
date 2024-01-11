# Turing HMS

<!--toc:start-->

- [Turing HMS](#turing-hms)
  - [Images](#images)
  - [How to run it](#how-to-run-it)
    - [Method 1 (Docker)](#method-1-docker)
    - [Method 2 (Your choice)](#method-2-your-choice)
  - [Stack 🎉](#stack-🎉)
  <!--toc:end-->

This is an hospital management system written in php. It comprises 7 moludes:

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

### Method 1 (Docker)

- Change the environment variables in `docker-compose.yml` and `app/config.php`.

- Now run it

```bash
docker compose up
```

- Open `http://localhost:40001` and to confirm that everything is running

### Method 2 (Your choice)

- Get the code
- Configure your own server and DB
- Import the database schemas located in the `mysql` directory
- Copy the content of the app directory to your server
- Start serving all your request to the `public` directory `index.php`

### Essential Routes

| Route           | Description         |
| --------------- | ------------------- |
| /               | Home page           |
| /login          | Login page          |
| /register       | Register page       |
| /staff/login    | Staff login page    |
| /staff/register | Staff register page |
| /admin          | Admin dashboard     |

## Stack 🎉

- JHC (Javascript, Html, Css)
- VanJS
- PHP
- MariaDB
- Docker
- Nginx
