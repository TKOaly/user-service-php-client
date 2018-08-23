<?php
namespace TkoAly;

require __DIR__ . '/../vendor/autoload.php';
use GuzzleHttp\Client;

/**
 * User service client.
 * @package TkoAly
 * @author TKO-äly ry
 */
class UserServiceClient
{
    /**
     * Fetches user data from TKO-äly User service.
     *
     * @param $token Token provided by authenticating to User service.
     * @param $service Service identifier.
     * @param null $options Request options. baseUrl and timeout are currently supported request options.
     * @return mixed HTTP response as a JSON object
     */
    public static function getMyData($token, $service, $options = null)
    {
        $user_service_url = "https://users.tko-aly.fi";
        $user_endpoint = "/api/users/me";

        $opts = [];
        $opts["headers"] = ['Authorization' => 'Bearer ' . trim($token), 'Service' => $service];

        $client = new Client([
            'base_uri' => ($options != null && isset($options["baseUrl"])) ? trim($options["baseUrl"]) : $user_service_url,
            'timeout'  => ($options != null && isset($options["timeout"])) ? $options["timeout"] : 5.0,
        ]);

        $response = $client->get($user_endpoint, $opts);
        $body = $response->getBody();
        return json_decode($body);
    }
}