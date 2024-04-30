<?php
namespace Revolut\Api\Idempotency;

interface IdempotencyKeyGeneratorContract
{
    public function generate();
}
