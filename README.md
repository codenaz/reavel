# Reavel
Develop, build and Run react + laravel on one server without using laravel mix

## Details
This setup contains Laravel 5.8.*(check in composer.json) and react 16.8.4(check in package.json)

The source files for reactJs are located in the /src folder.

## Setup

Follow this guide to setup project:

1. Clone repo with the command - `git clone https://github.com/emekadev/reavel.git`
2. Copy the `.env.example` file to a `.env` file in the same directory
3. Run `npm install`
4. Run `composer install && composer update`

Your project is now ready to be served.

## Compile React
Use the command ```npm start``` to compile react.

This setup makes use of HMR so the App will be updated whenever you make changes to the react/javascript files

## Start Laravel
You can start up your php server with ```php artisan serve``` then go to http://localhost:8000 on your browser

Note: Make sure you run ```npm start``` before firing up your php development server so that laravel can have access to the compiled react/javascript files.

When your app is ready for deployment, run ```npm run build``` and change APP_ENV in your env file to 'production'. Laravel will now read the built version of your react app and can be deployed to a server together with the app.js file in the /public.js/ folder.

If you are advanced user feel free to clone the repo and modify to suit your personal needs

TODO:
- [ ] Create a laravel helper to detect host for asset instead of using if/else


