# PHPFramework

> This is a project that I am still working on to expand and improve it in the future.

PHPFramework provides you with a simple MVC structure to speed up your start in development so you can focus only on the business logic and specifications of your project.

## How to run it

Before cloning the projetc you will need to setup your envirement and for that here is what you have to insall on your machine :

* PHP version >= 5.3.
* local server [Xampp](https://www.apachefriends.org/download.html) or [Wamp](https://www.wampserver.com/en/) ...
* PHP Dependency Manager [Composer](https://getcomposer.org/).

 :ok_hand: Great you're almost there.

Colone the project :
```git
git clone https://github.com/Aniss-nahim/PHPFramework.git
```


So now the next step is to configure the project and install the one and only dependency.

> PHPFramework is using one dependency so far [vlucas/phpdotenv](https://github.com/vlucas/phpdotenv)

Using [Composer](https://getcomposer.org/) install [vlucas/phpdotenv](https://github.com/vlucas/phpdotenv) dependency
```bash
$ composer install
```

For the last step, you gone need to configure your project.
Copy `.env.exemple` content into `.env` file

```bash
$ cp .env.exemple .env 
```
Now fill `.env` file with appropriate data.

```shell
#Application conf variables
APP_NAME=Your_App_Name
APP_URL=Your_Base_URL_Project

#Database conf variables
DB_CONNECTION=Your_DBMS_NAME // mysql
DB_HOST=Your_DBMS_Host // localhost
DB_PORT=Your_DBMS_Port // 3306
DB_DATABASE=Your_DB_Name // PHPFrameworkDB
DB_USERNAME=Your_DB_Login // root
DB_PASSWORD=Your_DB_Password
```
:clap: :clap: :clap: You've made it, you can run the project.

# How to use it

Coming soon :fire: