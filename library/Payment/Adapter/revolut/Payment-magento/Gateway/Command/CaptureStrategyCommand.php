<?php

namespace Revolut\Payment\Gateway\Command;

use Magento\Payment\Gateway\CommandInterface;
use Magento\Payment\Gateway\Command\CommandPoolInterface;

/**
 * @SuppressWarnings(PHPMD.StaticAccess)
 * @SuppressWarnings(PHPMD.LongVariable)
 */
class CaptureStrategyCommand implements CommandInterface
{
    
    /**
     * Capture command
     */
    public const CAPTURE = 'settlement';

    /**
     * @var CommandPoolInterface
     */
    private $commandPool;

    /**
     * Constructor
     *
     * @param CommandPoolInterface $commandPool
     */
    public function __construct(
        CommandPoolInterface $commandPool
    ) {
        $this->commandPool = $commandPool;
    }

    /**
     * @inheritdoc
     */
    public function execute(array $commandSubject)
    {
        $command = $this->getCommand();
        return $this->commandPool->get($command)->execute($commandSubject);
    }

    /**
     * Get execution command name
     * @return string
     */
    private function getCommand()
    {
        return self::CAPTURE;
    }
}
