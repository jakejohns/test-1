<?php

namespace Service;

use Aura\Payload\PayloadFactory;

abstract class Service
{
    protected $payloadFactory;
    
    public function __construct(PayloadFactory $payloadFactory)
    {
        $this->payloadFactory = $payloadFactory;
    }

}
