# user-service-php-client

A composer package used to access data from TKO-äly user service.

## Installation

Todo

## Example

```php
require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Exception\ServerException;

try {
    $userData = TkoAly\UserServiceClient::getMyData("JWT", "SERVICE_IDENTIFIER");
    print_r($userData);
} catch (ServerException $e) {
    die($e->getMessage());
}
```

## License

This project has been licensed with MIT license.