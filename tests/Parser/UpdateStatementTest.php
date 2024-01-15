<?php

declare(strict_types=1);

namespace PhpMyAdmin\SqlParser\Tests\Parser;

use PhpMyAdmin\SqlParser\Tests\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class UpdateStatementTest extends TestCase
{
    #[DataProvider('updateProvider')]
    public function testUpdate(string $test): void
    {
        $this->runParserTest($test);
    }

    /** @return string[][] */
    public static function updateProvider(): array
    {
        return [
            ['parser/parseUpdate1'],
            ['parser/parseUpdate2'],
            ['parser/parseUpdate3'],
            ['parser/parseUpdate4'],
            ['parser/parseUpdate5'],
            ['parser/parseUpdate6'],
            ['parser/parseUpdate7'],
            ['parser/parseUpdateErr'],
        ];
    }
}
