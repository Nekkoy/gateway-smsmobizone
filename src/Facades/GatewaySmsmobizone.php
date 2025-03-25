<?php

namespace Nekkoy\GatewaySmsmobizone\Facades;

use Illuminate\Support\Facades\Facade;
use Nekkoy\GatewayAbstract\DTO\MessageDTO;
use Nekkoy\GatewayAbstract\DTO\ResponseDTO;

/**
 * @method static ResponseDTO send(MessageDTO $message)
 */
class GatewaySmsmobizone extends Facade
{
    /**
     * Get the registered name of the component.
     * @return string
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return 'gateway-smsmobizone';
    }
}
