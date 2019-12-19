<?php

namespace Application\Basics;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Psr\Log\LogLevel;
use Symfony\Component\Yaml\Yaml;

class Stub
{
    public function __construct()
	{
        $value = Yaml::parse("foo: bar");
        print_r($value);

	    echo "\nTODO: Add better tests. And replace the ".__CLASS__." class with something useful.\n";
	    echo "This message will also be logged.\n";

        $logger = new Logger('A logger name');
        $logger->pushHandler(new StreamHandler('logs/smoke-test-log.log', Logger::DEBUG));

        $logger->log(
            LogLevel::DEBUG,
            'TODO: Add better tests. And replace the '.__CLASS__.' class with something useful.'
        );
	}
}
