<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class RequestTest extends TestCase
{
    public function testGivesHostname(): void
    {
        $this->assertIsString(Request::hostname());
    }

    public function testGivesServerAddress(): void
    {
        $this->assertIsString(Request::serverAddress());
    }

    public function testGivesServerName(): void
    {
        $this->assertIsString(Request::serverName());
    }
}

