<?php

namespace Symfony\Component\Messenger\Bridge\Amqp\Transport;

use Symfony\Component\Messenger\Stamp\StampInterface;

final class RetryAfterAMQPExceptionStamp implements StampInterface
{
    private $retries = 1;

    public function increaseRetryAttempts()
    {
        $this->retries++;
    }

    public function getRetryAttempts(): int
    {
        return $this->retries;
    }

}
