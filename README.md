# Semestro projektas

### Setup

Download needed files and set up parameters with Composer:

`composer install`

Create the database:

`run php bin/console doctrine:database:create`

Update the database:

`php bin/console doctrine:schema:update --force`

Run the server:

`php bin/console server:run`
