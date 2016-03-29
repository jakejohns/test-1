<?php

namespace Service;

use Aura\Payload_Interface\PayloadStatus as Status;

class StatusService extends Service
{
    public function __invoke()
    {
        return $this->payloadFactory->newInstance()
            ->setStatus(Status::SUCCESS)
            ->setOutput('Dork');
    }

}
