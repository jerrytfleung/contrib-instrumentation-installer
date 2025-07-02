<?php
require_once __DIR__ . '/../../installer_internals.php'; // adjust the path

use PHPUnit\Framework\TestCase;

class InternalsTest extends TestCase
{

    public function testGetAutoPackagesReturnsExpectedPackages()
    {
        // Call the function
        $result = get_auto_packages();
        $this->assertCount(26, $result);
    }
}
