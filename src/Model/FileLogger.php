<?php

declare(strict_types=1);

namespace App\Model;

use App\Interface\LoggerInterface;

class FileLogger implements LoggerInterface {
    public function send(string $message): void {
        echo "\"$message\" was sent via file. ";
    }

    public function sendByLogger(string $message, string $loggerType): void {
        // Логіка для запису в файл
        $this->send($message);
    }

    public function getType(): string {
        return 'file';
    }

    public function setType(string $type): void {
        // Логіка для зміни типу логера
    }
}