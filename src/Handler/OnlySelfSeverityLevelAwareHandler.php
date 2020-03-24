<?php

declare(strict_types=1);

/**
 * File: OnlySelfSeverityLevelAwareHandler.php
 *
 * @author Bartosz Kubicki bartosz.kubicki@lizardmedia.pl>
 * @copyright Copyright (C) 2020 Lizard Media (http://lizardmedia.pl)
 */

namespace BKubicki\Logger\Handler;

use Magento\Framework\Filesystem\DriverInterface;
use Magento\Framework\Logger\Handler\Base;
use Monolog\Logger;

/**
 * Class OnlySelfSeverityLevelAwareHandler
 * @package BKubicki\Logger\Handler
 */
class OnlySelfSeverityLevelAwareHandler extends Base
{
    /**
     * OnlySelfSeverityLevelAwareHandler constructor.
     * @param DriverInterface $filesystem
     * @param string $level
     * @param string|null $filePath
     * @param string|null $fileName
     * @throws \Exception
     */
    public function __construct(
        DriverInterface $filesystem,
        string $level = Logger::DEBUG,
        ?string $filePath = null,
        ?string $fileName = null
    ) {
        parent::__construct($filesystem, $filePath, $fileName);
        $this->loggerType = $level;
        $this->level = $level;
    }

    /**
     * @param array $record
     * @return bool
     * @codeCoverageIgnore
     */
    public function isHandling(array $record): bool
    {
        return (string) $record['level'] === (string) $this->level;
    }
}
