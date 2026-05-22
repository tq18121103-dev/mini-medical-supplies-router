# PHP Mini Medical Supplies Router

Mini Medical Supplies Routing App built with PHP Front Controller, Router and Standard Response.

## Features

- Home page
- Health check JSON response
- Medical supplies list
- Create supply form
- Login demo form
- Redirect response
- 404 Not Found
- 405 Method Not Allowed

## Routes

| Method | URL | Description |
|---|---|---|
| GET | / | Home page |
| GET | /health | Health check JSON |
| GET | /supplies | Medical supplies list |
| GET | /supplies/create | Create supply form |
| POST | /supplies | Submit create form |
| GET | /login | Login form |
| POST | /login | Handle login |
| GET | /logout | Logout redirect |
| GET | /go-home | Redirect to home |

## Project Structure

```text
public/
src/
views/
```

## Run Project

```bash
composer dump-autoload
php -S localhost:8000 -t public public/index.php
```

## Test URLs

```text
http://localhost:8000
http://localhost:8000/health
http://localhost:8000/supplies
http://localhost:8000/supplies/create
http://localhost:8000/login
```

## HTTP Status Codes

- 200 OK
- 302 Found
- 404 Not Found
- 405 Method Not Allowed

## Author

Quynh Ngo