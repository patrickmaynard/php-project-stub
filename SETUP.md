# A bit of additional documentation

... beyond what is in README.md

## How-tos

A few tips for additional common tasks:

### Setting up a new project

* Create a new project on the github website. (For example, my-project)

* `git clone https://github.com/patrickmaynard/php-project-stub.git my-project`

* `cd my-project`

* `git remote add origin https://github.com/patrickmaynard/my-project.git`

* `mv README.md README_OLD.md`

* `echo "TODO: Add README contents" > README.md`

* `git add README.md`

* `git commit -m "Add new README"`

* `git push -u origin master`

* Follow instructions in README_OLD.md to test the project

## Source documentation and ci.yml source

I consulted the following pieces of documentation when setting up this project stub:

* https://getcomposer.org/doc/04-schema.md#psr-4

* http://nlslack.com/getting-started-with-phpunit-7-using-composer/

* https://symfony.com/doc/current/components/yaml.html

* https://www.jetbrains.com/help/phpstorm/symfony-support.html#symfony-code-style

* https://github.com/sebastianbergmann/phpunit/blob/master/.github/workflows/ci.yml

