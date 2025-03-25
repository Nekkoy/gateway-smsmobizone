<?php

namespace Nekkoy\GatewaySmsmobizone\DTO;

use Nekkoy\GatewayAbstract\DTO\AbstractConfigDTO;

/**
 *
 */
class ConfigDTO extends AbstractConfigDTO
{
    /**
     * URL API
     * @var string
     */
    public $api_url;

    /**
     * Ключь АПИ
     * @var string
     */
    public $api_key;

    /**
     * Имя при отправке через СМС
     * @var string
     */
    public $name_sms;

    /**
     * @var string
     */
    public $handler = \Nekkoy\GatewaySmsmobizone\Services\SendMessageService::class;
}
