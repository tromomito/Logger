<?php

declare(strict_types=1);

namespace App\Factory;

use InvalidArgumentException;
use App\Interface\LoggerInterface;
use App\Model\DbLogger;
use App\Model\EmailLogger;
use App\Model\FileLogger;

class LoggerFactory
{
    public static function createLogger(string $type = null): LoggerInterface
    {
        return match ($type) {
            'email' => new EmailLogger(),
            'file' => new FileLogger(),
            'db' => new DbLogger(),
            default => throw new InvalidArgumentException("Invalid logger type: $type"),
        };
    }

    public static function createAll(): array
    {
        return [
            new EmailLogger(),
            new FileLogger(),
            new DbLogger(),
        ];
    }
}