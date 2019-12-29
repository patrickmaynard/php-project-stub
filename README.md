# PHP project stub
A basic scaffolding on which to build PHP projects using composer, MySQL and a simple folder structure.

* To set things up, run `make init`.
* To make the database connection work, update `config/settings.yaml`.
* To test the basics, run `php smoketest.php`.
* To see the smoke test in a browser: 
    * `cd public`
    * `php -S localhost:8000`
    * Visit `http://localhost:8000/` in a browser

TODOs: 

* Get rid of smoketest.php and update instructions to allow running of the index file from the cli.
* Add PHPUnit tests and a simple Makefile target for running them. 
* Add a RECIPES.md file for stuff like copying the project to a new github repository.
