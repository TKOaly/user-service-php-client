# user-service-php-client

A composer package used to access data from TKO-äly user service.

## Installation

1. Clone the repo
2. Run `composer install` in the cloned repo
3. Require the script in your code and follow the example below

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