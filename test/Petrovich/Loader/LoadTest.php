<?php
namespace BoShurik\Petrovich\Test\Petrovich\Loader;

use PHPUnit\Framework\TestCase;

use BoShurik\Petrovich\Petrovich\Loader;
use BoShurik\Petrovich\Petrovich\IOException;
use BoShurik\Petrovich\Petrovich\RuntimeException;

class LoadTest extends TestCase
{
    public function testUnknownExtension()
    {
        $filePath = realpath(__DIR__ . '/../../../files/file.unknown');

        static::expectException(RuntimeException::class);
        static::expectExceptionMessage('File has invalid format');

        Loader::load($filePath, 'unknown');
    }

    public function testInvalidFile()
    {
        $filePath = realpath(__DIR__ . '/../../../files/file.not-exists');

        static::expectException(IOException::class);
        static::expectExceptionMessage('File "' . $filePath . '" doesn\'t exist or is not readable');

        Loader::load($filePath);
    }
}
