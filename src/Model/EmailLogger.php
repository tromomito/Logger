<?php

declare(strict_types=1);

namespace App\Model;

use App\Interface\LoggerInterface;

class EmailLogger implements LoggerInterface {

    public function send(string $message): void {
        echo "\"$message\" was sent via email. ";
    }

    public function sendByLogger(string $message, string $loggerType): void {
        // Логіка для відправки емейлу
        $this->send($message);
    }

    public function getType(): string {
        return 'email';
    }

    public function setType(string $type): void {
        // Логіка для зміни типу логера
    }
}