<?php

declare(strict_types=1);

/**
 * File: OnlySelfSeverityLevelAwareHandler.php
 *
 * @author Bartosz Kubicki bartosz.kubicki@lizardmedia.pl>
 * @copyright Copyright (C) 2020 Lizard Media (http://lizardmedia.pl)
 */

namespace BKubicki\Logger\Handler;

use Magento\Framework\Logger\Handler\Base;

/**
 * Class OnlySelfSeverityLevelAwareHandler
 * @package BKubicki\Logger\Handler
 */
class OnlySelfSeverityLevelAwareHandler extends Base
{
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
