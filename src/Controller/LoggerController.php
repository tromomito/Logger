<?php

declare(strict_types=1);

namespace App\Controller;

use App\Factory\LoggerFactory;
use App\Interface\LoggerInterface;

class LoggerController
{
    private LoggerInterface $defaultLogger;
    private array $loggerTypes;

    public function __construct(
        array $config
    ) {
        $this->defaultLogger = LoggerFactory::createLogger($config['default_logger_type']);
        $this->loggerTypes = $config['logger_types'];
    }

    public function log(): void
    {
        $this->defaultLogger->send('Log message');
    }

    public function logTo(string $type): void
    {
        $logger = LoggerFactory::createLogger($type);
        $logger->sendByLogger('Log message', $type);
    }

    public function logToAll(): void
    {
        foreach ($this->loggerTypes as $type) {
            $logger = LoggerFactory::createLogger($type);
            $logger->sendByLogger('Log message', $type);
        }
    }
}