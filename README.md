# PHP project stub
A basic scaffolding on which to build PHP projects using composer, MySQL and a simple folder structure. This is for very small projects where I don't need Symfony or Docker. 

For bigger projects, see https://github.com/patrickmaynard/symfony-5-docker.

## Basic setup

* To set things up, run `make init`.
* To make the database connection work, update `config/settings.yaml`.
* To see output from a smoke test, run `php public/index.php`.
* Or, to see the smoke test in a browser: 
    * `cd public`
    * `php -S localhost:8000`
    * Visit `http://localhost:8000/` in a browser
* To see output from unit tests, run `./vendor/bin/phpunit`.

## More details

See SETUP.md for a few tips on doing additional common tasks, along with links to documentation used in setting up this stub.

## TODO items 

* Add more tests.
* Update SETUP.md to show how to create a new project.
