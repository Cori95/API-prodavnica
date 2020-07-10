###TaskManager 1.0

### App Description 

Simple application that should enable basic Auth features to the user and also provide them with the ability
to create new Tasks or Labels. Users can freely add labels to tasks they want, delete selected tasks
or maybe mark them as done. Also users have the ability to remove labels from the tasks.

Technologies used for development :

- [Laravel](https://laravel.com/) 5.7 for Backend
- [React](https://reactjs.org/) 16.* for Frontend 

#### Requirements :

- **[Laravel](https://laravel.com/)**

    - PHP >= 7.1.3
    - OpenSSL PHP Extension
    - PDO PHP Extension
    - Mbstring PHP Extension
    - Tokenizer PHP Extension
    - XML PHP Extension
    - Ctype PHP Extension
    - JSON PHP Extension
    - BCMath PHP Extension
    - [composer](https://getcomposer.org/)
    
- **[React](https://reactjs.org/)**
    - Node.js ([npm](https://nodejs.org/en/) 10.13 ^)


### Installation Guide

1) Clone repository 
    `git clone git@gitlab.com:jsguru-tests/sergejvukovic.git`
    
2) Go to project root and run `composer install` to install all dependency's

3) Go to /public folder and run `npm install` this will install all node modules

4) Go back to root of the project and copy `.env-example` to `.env`
    1) You can do this from terminal by running `cp .env-example .env`
    
5) Open `.env` file and configure your DB settings

6) Now you have to run couple of artisan commands  : 
    1) `php artisan key:generate` this will generate application key
    2) `php artisan jwt:secret` this will generate secret for hashing your JWT tokens
    3) `php artisan migrate` this will generate all tables in DB needed by the App
    
That's all in the next step you will find out how to run dev environments for Frontend and Backend.

### Running the App

**Backend**:

To start the dev server for [Laravel](https://laravel.com/) all you need to do is go to project root and run this command :

`php artisan serv` or `php artisan serve`

This will start local server on [http://localhost:8000](http://localhost:8000)

Best way to test it out is by using [Postman](https://www.getpostman.com/).

You can find full API documentation published [HERE](https://documenter.getpostman.com/view/1233214/RzfasXYP)

**Frontend**:

To start the dev server for React project all you need to do is go to /public folder and run this command :

`npm start` or if you have [Yarn](https://yarnpkg.com/en/) installed `yarn start`

Open [http://localhost:3000](http://localhost:3000) to view it in the browser.

The page will reload if you make edits.<br>

### User story
- As a user, I want to have the ability to register
- As a user, I want to have the ability to log in and become
authenticated user
- As an authenticated user, I want to have the ability to
manage my tasks
- As an authenticated user, I want to have the ability
manage task labels
- As an authenticated user, I want to have the ability to add
labels to my tasks
- As an authenticated user, I want to have the ability to
logout