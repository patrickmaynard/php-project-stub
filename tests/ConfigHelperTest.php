<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class ConfigHelperTest extends TestCase
{
    public function testGetRootDirContainsDirectorySeparator()
    {
        $rootDir = \Helpers\ConfigHelper::getRootDir();
        $this->assertContains(DIRECTORY_SEPARATOR, $rootDir);
    }
}