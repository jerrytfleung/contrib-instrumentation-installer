<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class InstallerTest extends TestCase
{
    public function test_packages(): void
    {
        require_once __DIR__ . '/../../installer_internals.php';
    }
}

class TestClass
{
    public static function staticMethod()
    {
    }

    public function __invoke()
    {
    }

    public function method()
    {
    }
}
