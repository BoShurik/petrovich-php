<?php
namespace BoShurik\Petrovich\Test\Petrovich\Loader;

use PHPUnit\Framework\TestCase;

use BoShurik\Petrovich\Petrovich\Loader;

class AvailablesTest extends TestCase
{
    public function testAvailableFileTypesShouldReturnCorrectAmount()
    {
        static::assertCount(2, Loader::getAvailableFileTypes());
    }
}
