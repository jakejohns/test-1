<?php
// @codingStandardsIgnoreFile

namespace Config;

use Aura\Di\Container;
use Aura\Di\ContainerConfig;

use Service\Service;
use Aura\Payload\PayloadFactory;

class Application extends ContainerConfig
{
    /**
     * @SuppressWarnings(PHPMD.ShortVariable)
     */
    public function define(Container $di)
    {
        $di->params[Service::class] = [
            'payloadFactory' => $di->lazyNew(PayloadFactory::class)
        ];
    }
}
