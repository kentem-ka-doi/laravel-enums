<?php

namespace Kentem\Laravel\Enums\Tests\Unit;

use Kentem\Laravel\Enums\Enum;

/**
 * @method static EnumFixture FOO()
 * @method static EnumFixture BAR()
 */
class EnumFixture extends Enum
{
    const FOO = 'test';
    const BAR = 123;
}
