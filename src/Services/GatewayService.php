<?php

namespace Nekkoy\GatewaySmsmobizone\Services;

use Nekkoy\GatewaySmsmobizone\DTO\ConfigDTO;

/**
 *
 */
class GatewayService
{
    protected $config;

    public function __construct()
    {
        $this->config = config('gateway-smsmobizone', []);
    }

    /**
     * @return ConfigDTO
     */
    public function getConfig()
    {
        return new ConfigDTO($this->config);
    }
}
