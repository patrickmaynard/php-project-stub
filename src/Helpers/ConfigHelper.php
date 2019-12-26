<?php

namespace Helpers;

use Symfony\Component\Yaml\Yaml;

class ConfigHelper
{
    public static function getConfig()
    {
        return Yaml::parse(
            file_get_contents(
                __DIR__ .
                DIRECTORY_SEPARATOR .
                '..' .
                DIRECTORY_SEPARATOR .
                '..' .
                DIRECTORY_SEPARATOR .
                'config' .
                DIRECTORY_SEPARATOR .
                'settings.yaml'
            )
        );
    }
}