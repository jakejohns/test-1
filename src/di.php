<?php
use Aura\Di\ContainerBuilder;

$builder = new ContainerBuilder();

$di = $builder->newInstance();

$di->params['Service\Service'] = [
    'payloadFactory' => $di->lazyNew('Aura\Payload\PayloadFactory')
];
