<?php

namespace Nekkoy\GatewaySmsmobizone\Services;

use Nekkoy\GatewayAbstract\Services\AbstractSendMessageService;
use Nekkoy\GatewaySmsmobizone\DTO\ConfigDTO;

/**
 *
 */
class SendMessageService extends AbstractSendMessageService
{
    /** @var string */
    protected $api_url = 'https://api.mobizon.kz';

    /** @var ConfigDTO */
    protected $config;

    /**  */
    protected function init() {
        $this->api_url = $this->config->api_url;
    }

    /** @return string */
    protected function url()
    {
        $method = '/service/message/sendSMSMessage?';
        $params = sprintf('output=json&api=v1&apiKey=%s&recipient=%s&from=%s&text=%s', $this->config->api_key, $this->message->destination, $this->config->name_sms, urlencode($this->message->text));

        return $this->api_url . $method . $params;
    }

    /** @return mixed */
    protected function development()
    {
        return '{
            "code":0,
            "data":[
                {
                    "id":"1234567890",
                    "status":"DELIVRD",
                    "segNum":"1",
                    "startSendTs":"2022-09-20 19:25:07",
                    "statusUpdateTs":"2022-09-20 19:25:11"
                }
            ],
            "message":""
        }';
    }

    /** @return array */
    protected function response()
    {
        $response = json_decode($this->response, true);
        if( isset($response["code"]) && in_array($response["code"], [0, 100])) {
            $this->response_code = $response["code"];
        }

        if( isset($response["message"]) && !empty($response["message"]) ) {
            $this->response_message = $response["message"];
        }

        if( isset($response["data"][0]["id"]) ) {
            $this->message_id = $response["data"][0]["id"];
        }

        return $response;
    }

    /**
     * @return array
     */
    protected function data()
    {
        return [];
    }
}
