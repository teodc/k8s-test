<?php

declare(strict_types=1);

final class Request
{
    public static function hostname(): string
    {
        return $_SERVER['HOSTNAME'] ?? 'unknown';
    }

    public static function serverAddress(): string
    {
        return $_SERVER['SERVER_ADDR'] ?? 'unknown';
    }

    public static function serverName(): string
    {
        return $_SERVER['SERVER_NAME'] ?? 'unknown';
    }
}
