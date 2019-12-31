# PHP project stub
A basic scaffolding on which to build PHP projects using composer, MySQL and a simple folder structure.

## Basic setup

* To set things up, run `make init`.
* To make the database connection work, update `config/settings.yaml`.
* To test the basics, run `php public/index.php`.
* Or, to see the smoke test in a browser: 
    * `cd public`
    * `php -S localhost:8000`
    * Visit `http://localhost:8000/` in a browser
* To run unit tests, run `./vendor/bin/phpunit`.

## More details

See SETUP.md for a few tips on doing additional common tasks, along with links to documentation used in setting up this stub.

## TODO items 

* Add more tests. 
* Update SETUP.md to show how to create a new project.