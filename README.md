Introduction 
=============

Laravel Socialite provides an expressive, fluent interface to OAuth authentication with Facebook, Twitter, Google, LinkedIn, GitHub, GitLab and Bitbucket. It handles almost all of the boilerplate social authentication code you are dreading writing.

We are not accepting new adapters.

Adapters for other platforms are listed at the community driven Socialite Providers website.

Requirements
============
- PHP 7.4
- MySQL 5.7 or 8

## Installation

Clone the repo locally:
```

git clone https://github.com/ShwePhueHmone/laravel_social_login.git

`cd` into cloned directory and install dependencies. run below command one by one.
```bash

composer install
cp .env.example .env
php artisan key:generate
```
### Configuration in `.env` file

Database **eg.**
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=social_login
DB_USERNAME=root
DB_PASSWORD=
```
Facebook ID and Secret Key 
```
FACEBOOK_APP_ID=
FACEBOOK_APP_SECRET=
```
Create Facebook ID in following link:
> https://developers.facebook.com/
<br>

Google ID and Secret Key
```
GOOGLE_CLIENT_ID=
GOOGLE_CLIENT_SECRET=
```
Create Google ID in following link:
> https://console.cloud.google.com/apis/dashboard 
<br>

Database Migration
==================
Run database migrations:
```
php artisan migrate
```
## Server Run

Run the dev server:
```
php artisan serve
```

Visit below url:
```
http://localhost:8000
```
