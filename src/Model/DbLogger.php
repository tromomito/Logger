<?php

declare(strict_types=1);

namespace App\Model;

use App\Interface\LoggerInterface;

class DbLogger implements LoggerInterface {
    public function send(string $message): void {
        echo "\"$message\" was sent via db. ";
    }

    public function sendByLogger(string $message, string $loggerType): void {
        // Логіка для запису в базу даних
        $this->send($message);
    }

    public function getType(): string {
        return 'db';
    }

    public function setType(string $type): void {
        // Логіка для зміни типу логера
    }
}