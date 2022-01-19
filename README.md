# Vortigo - Tecnical challenge - Analyst developer PHP
Tecnical challenge for analyst developers at Vortigo


## Stack
**Back-end:** `PHP 8.1.1 (cli) (built: Dec 15 2021 10:31:43) (ZTS Visual C++ 2019 x64)`

**FramekWork:** `Laravel Framework 8.79.0`

**Database:** `10.4.22-MariaDB (local)`

## Locally run

First of all, if you don't have php and MySQL installed, do this:

Access and install XAMPP, to install php, MySQL and Apache dependencies

```bash
  https://www.apachefriends.org/index.html
```

Now let's set up the database, first you need to do is to include the "C:\xampp\mysql\bin" directory in you Path in Environment Variables.
Search for Environment variables in your Operation System and enter it.
- Click on "Environment variables...";
- Click on the row that has the variable value as "path" and click "Edit...";
- Click on the button "New" and then "Search...";
- Find where you installed XAMPP and access this directory: "\xampp\mysql\bin";

Let's do this for PHP too, so:
- Click on the button "New" and then "Search...";
- Find where you installed XAMPP and access this directory: "\xampp\php";

- Click the "OK" button

Go to `"xampp\php"` and edit the file `"php.ini"`, find the text `"extension=pdo_mysql"` and uncomment it.
Below that, insert:

```bash
  extension= php_fileinfo.dll
```

Okay, now that we set the environment variables up, we need to create the database, so open up a terminal and type:

```bash
  mysql -u root -e "create database vortigo"; 
```

Now that we created our database, let's proceed

Install composer at

```bash
  https://getcomposer.org/download/php ar
```

If you don't have GIT installed, please access the link below and follow the tutorial

```bash
  https://git-scm.com/book/en/v2/Getting-Started-Installing-Git
```

After this, we can clone the project and download its dependencies.
But first you need to open your command prompt, after this, go to your folder directory that you want to install the project and type this:

```bash
  git clone https://github.com/GustavoRosas/Vortigo-Teste.git
```

Enter the project directory

```bash
  cd teste_vortigo
```

Install its dependencies, typing this on the terminal:

```bash
  composer update
```
```bash
  composer install
```

Migrate your database

```bash
  php artisan migrate
```

Start the server

```bash
  php artisan serve
```

Done! From now once you can access the API.

## Examples on how to use the Endpoints

Now that everything is working, time to check the endpoints of this API.

Here's the endpoints that this API has:

`[GET]/vendedores/list` - List all the salesman in database;

`[GET]/vendedores/add` - Add a new salesman;

`[GET]/venda/list` - List all the sales in database, paginating by 15;

`[POST]/venda/add` - Add a new sale.

## Author

- [@Gustavo Rosas](https://www.github.com/GustavoRosas)

