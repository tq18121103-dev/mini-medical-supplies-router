````md
# Mini Medical Supplies Routing App

Mini PHP application using Front Controller, Router and Standard Response.

## Features

- Home page HTML response
- Health check JSON response
- Medical supplies list page
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
````

## Run Project

```bash
composer dump-autoload
php -S localhost:8000 -t public public/index.php
```

## Test

Open browser:

```text
http://localhost:8000
```

Or test using curl:

```bash
curl -i http://localhost:8000/health
```

```
```
