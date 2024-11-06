# icare_assignment10_api

<details>
RESTful API for a URL shortener service
</details>

## Requirements

Before proceeding with the installation, ensure that your system meets the following requirements:

- **PHP >= 8.1** ([Download PHP](https://www.php.net/downloads.php))
- **Composer** ([Download Composer](https://getcomposer.org/download/))
- **Laravel 11** ([Laravel Installation Guide](https://laravel.com/docs/11.x/installation))
- **MySQL** ([MySQL Installation Guide](https://www.mysql.com/downloads/))
- **Node.js & NPM** ([Node.js Downloads](https://nodejs.org/en/))
- **Git** ([Git Installation Guide](https://git-scm.com/downloads))

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Installing

Clone the repo
```
git clone https://github.com/hasanhafiz/icare_assignment10_api.git
```

Create database
```
CREATE DATABASE `icare_assignment10_api`
```
Run Migrations: Migrate the database to create the necessary tables.

```
php artisan migrate --seed
```

Run the Application: Start the Laravel development server to run the app locally.

```
php artisan serve

``````

Open any api building platform like postman and Click Headers Tab. This is essential for accessing and building any api link.

- Set key : Accept, value : application/json

-----------------
For registration: 
- url: http://icare_assignment10_api.test/api/v1/register
- set method: POST
- Select Body tab and put these json key pair value to register users. Set "JSON" as row format

```
{
    "name" : "hasanhafiz",
    "email" : "hasanhafiz@gmail.com",
    "password" : "123456",
    "password_confirmation" : "123456"
}
``````
If user registration is successful, then success message will display.

------------------
For log in:
- url: http://icare_assignment10_api.test/api/v1/login 
- set method: POST 
- Select Body tab and put these json key pair value to log in. Set "JSON" as row format

```
{
    "email" : "hasanhafiz@gmail.com",
    "password" : "123456"
}
``````
If user logged in is successful, sanctum token will return as response.

----------------
For url shor url code:
- url: http://icare_assignment10_api.test/api/v1/generate-short-url
- set method: POST 
- Select "Authorization" tab. Select "Bearer Token" from Type, and put token value in "token" field.
- Select Body tab and put these json key pair value to log in. Set "JSON" as row format

```
{
    "url" : "https://classroom.google.com/c/Njc5NzE4OTcyODM5/a/NzI0NjI1Njg2NTY4/details"
}
``````
After successfull creation, a short code will return in response

----------------
Get list of short code:

- url: http://icare_assignment10_api.test/api/v1/urls
- set method: GET 
- Select "Authorization" tab. Select "Bearer Token" from Type, and put token value in "token" field.
- After click "Send" button, it will display list of Urls as JSON format 


----------------
Get current loggin in user 

http://icare_assignment10_api.test/api/user


----------------
Get all user list

- url: http://icare_assignment10_api.test/api/users
- set method: GET 
- No token is required for this
- After click "Send" button, it will display list of users as JSON format 