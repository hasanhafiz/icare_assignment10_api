# icare_assignment10_api
RESTful API for a URL shortener service

API doc 

Click Headers Tab
- Set key : Accept, value : application/json

For registration: 
- url: http://icare_assignment10_api.test/api/v1/register
- set method: POST
- Select Body tab and put these json key pair value to register users. Set "JSON" as row format
{
    "name" : "hasanhafiz",
    "email" : "hasanhafiz@gmail.com",
    "password" : "123456",
    "password_confirmation" : "123456"
}

If user registration is successful, then success message will display.

For log in:
- url: http://icare_assignment10_api.test/api/v1/login 
- set method: POST 
- Select Body tab and put these json key pair value to log in. Set "JSON" as row format
{
    "email" : "hasanhafiz@gmail.com",
    "password" : "123456"
}

If user logged in is successful, sanctum token will return as response.

----------------
For url shor url code:
- url: http://icare_assignment10_api.test/api/v1/generate-short-url
- set method: POST 
- Select "Authorization" tab. Select "Bearer Token" from Type, and put token value in "token" field.
- Select Body tab and put these json key pair value to log in. Set "JSON" as row format
{
    "url" : "https://classroom.google.com/c/Njc5NzE4OTcyODM5/a/NzI0NjI1Njg2NTY4/details"
}

After successfull creation, a short code will return in response

----------------
Get list of short code:

- url: http://icare_assignment10_api.test/api/v1/urls
- set method: GET 
- Select "Authorization" tab. Select "Bearer Token" from Type, and put token value in "token" field.
- After click "Send" button, it will display list of Urls as JSON format 


----------------
Get user list

- url: http://icare_assignment10_api.test/api/v1/users
- set method: GET 
- No token is required for this
- After click "Send" button, it will display list of users as JSON format 

