# gateway-smsmobizone
SMS Gateway для сервиса [mobizon.ua](https://mobizon.ua) ( [mobizon.kz](https://mobizon.kz) )

Установка:
```
composer require nekkoy/gateway-smsmobizone
```

Конфигурация `.env`
===============
```
# Включить/выключить модуль
SMSMOBIZONE_ENABLED=true

# URL API (api.mobizon.ua или api.mobizon.kz)
SMSMOBIZONE_API_URL=https://api.mobizon.ua

# Ключь API
SMSMOBIZONE_API_KEY=

# Имя отправителя в СМС
SMSMOBIZONE_SMS_NAME=
```

Использование
===============

Создайте DTO сообщения, передав первым параметром текст, а вторым — номер получателя:
```
$message = new \Nekkoy\GatewayAbstract\DTO\MessageDTO("test", "+380123456789");
```

Затем вызовите метод отправки сообщения через фасад:
```
/** @var \Nekkoy\GatewayAbstract\DTO\ResponseDTO $response */
$response = \Nekkoy\GatewaySmsmobizone\Facades\GatewaySmsmobizone::send($message);
```

Метод возвращает DTO-ответ с параметрами:
 - message - сообщение об успешной отправке или ошибке
 - code - код ответа:
   - code < 0 - ошибка модуля
   - code > 0 - ошибка HTTP
   - code = 0 - успех
 - id - ID сообщения
