<?php

namespace App\MessageHandler;

use App\Message\LogHello;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
final class LogHelloHandler{

    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        // do something with your message
        $this->logger = $logger;
    }
    public function __invoke(LogHello $message): void
    {
        $this->logger->warning(str_repeat('🎸🎸🎸🎸🎸🎸🎸🎸🎸-', $message->length).' '.$message->length);
    }
}
