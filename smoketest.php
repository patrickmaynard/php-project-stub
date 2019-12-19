<?php

    //I am just testing the autoloader here.

    require('autoload.php');

    use Symfony\Component\Yaml\Yaml;
    use Application\Basics\Stub;

    $value = Yaml::parse("foo: bar");

	print_r($value);

	$stub = new Stub;
