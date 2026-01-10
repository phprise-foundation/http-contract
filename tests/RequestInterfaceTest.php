<?php

declare(strict_types=1);

namespace Phprise\Http\Contract\Tests;

use PHPUnit\Framework\TestCase;
use Phprise\Http\Contract\RequestInterface;

final class RequestInterfaceTest extends TestCase
{
    public function testInterfaceExists(): void
    {
        $this->assertTrue(interface_exists(RequestInterface::class));
    }
}
