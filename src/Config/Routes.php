<?php
// @codingStandardsIgnoreFile

namespace Config;

use Aura\Di\Container;
use Aura\Di\ContainerConfig;

use Service\StatusService;

class Routes extends ContainerConfig
{
    /**
     * @SuppressWarnings(PHPMD.ShortVariable)
     */
    public function modify(Container $di)
    {
        $adr = $di->get('radar/adr:adr');
        $adr->get('Status','/', StatusService::class);
    }
}
