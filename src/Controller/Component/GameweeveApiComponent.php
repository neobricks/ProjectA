<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use GuzzleHttp;
use mysql_xdevapi\Exception;

class GameweeveApiComponent extends Component
{
    protected $credentials = [];
    protected $host;
    protected $client;

    private $http_default_headers = [
        'Content-Type' => 'application/json',
        'Accept' => '*/*'
    ];
    private $http_status_ok = ['200', '201', '202', '204', '301'];


    public function __construct(ComponentRegistry $registry, array $config = [])
    {
        parent::__construct($registry, $config);

        $this->host = 'http://api.gameweeve.com';
        $this->client = new GuzzleHttp\Client(['base_uri' => $this->host]);
    }


    /**
     * @param null $endpoint
     * @param string $type
     * @param array $query_parameters
     * @param array $request_body
     * @param array $options
     * @param null $file_path
     * @return bool|mixed
     * @throws GuzzleHttp\Exception\GuzzleException
     */
    private function callAPI($endpoint = null, $type = 'POST', $query_parameters = [],
                             $request_body = [], $options = [], $file_path = null)
    {
        $headers = $this->http_default_headers;

        try {
            $response = $this->client->request($type, $endpoint, [
                'form_params' => $request_body,
                'query' => $query_parameters,
                'headers' => $headers,
            ]);

            dump($response);
            echo "<h1> Body: </h1>";
            dump($response->getBody()->getContents());

            if (in_array($response->getStatusCode(), $this->http_status_ok)) {

                return json_decode($response->getBody(), true);
            }

        } catch (Exception $exception) {
            dump($exception);
        }


        return false;
    }

    /**
     * Register and Login
     */


    /**
     * @param $data
     * @return bool|mixed
     */
    public function register($data)
    {
        $params = [
            'email',
            'pw',
            'ip',
            'userTypeID',
            'password',
        ];
        $request_body = [];
        $query_parameters = [];
        foreach ($params as $param) {
            if (isset($data[$param])) {
                $query_parameters['data'][$param] = $data[$param];
            }
        }
        $query_parameters['data'] = json_encode($query_parameters['data']);
        $endpoint = '/registerJson.php';
        try {
            return $this->callAPI($endpoint, 'POST', $query_parameters, $request_body, []);
        } catch (GuzzleHttp\Exception\GuzzleException $e) {
            return false;
        }
    }

    public function login($data)
    {
        $params = [
            'email',
            'password',
        ];
        $request_body = [];
        $query_parameters = [];
        foreach ($params as $param) {
            if (isset($data[$param])) {
                $query_parameters['data'][$param] = $data[$param];
            }
        }
        $query_parameters['data'] = json_encode($query_parameters['data']);
        $endpoint = '/user_login.php';
        try {
            return $this->callAPI($endpoint, 'POST', $query_parameters, $request_body, []);
        } catch (GuzzleHttp\Exception\GuzzleException $e) {
            return false;
        }
    }

    public function logout($data)
    {
        $params = [
            'email',
        ];
        $request_body = [];
        $query_parameters = [];
        foreach ($params as $param) {
            if (isset($data[$param])) {
                $query_parameters['data'][$param] = $data[$param];
            }
        }
        $query_parameters['data'] = json_encode($query_parameters['data']);
        $endpoint = '/user_logout.php';
        try {
            return $this->callAPI($endpoint, 'POST', $query_parameters, $request_body, []);
        } catch (GuzzleHttp\Exception\GuzzleException $e) {
            return false;
        }
    }



    /**********************************************************************
     *
     * User
     *
     **********************************************************************/

    public function user_update($data) {
        $params = [
            'email',
            'userID',
            'userNumber',
            'partner',
            'skills',
            'content_creator',
            'moderator',
            'tester',
            'pro_gamer',
            'translator',
            'caster',
            'company',
            'other',
        ];
        $request_body = [];
        $query_parameters = [];
        foreach ($params as $param) {
            if (isset($data[$param])) {
                $query_parameters['data'][$param] = $data[$param];
            }
        }
        $query_parameters['data'] = json_encode($query_parameters['data']);
        $endpoint = '/user_update.php';
        try {
            return $this->callAPI($endpoint, 'POST', $query_parameters, $request_body, []);
        } catch (GuzzleHttp\Exception\GuzzleException $e) {
            return false;
        }
    }


    public function user_verify($data) {
        $params = [
            'key',
        ];
        $request_body = [];
        $query_parameters = [];
        foreach ($params as $param) {
            if (isset($data[$param])) {
                $query_parameters['data'][$param] = $data[$param];
            }
        }
        $query_parameters['data'] = json_encode($query_parameters['data']);
        $endpoint = '/verifyJson.php';
        try {
            return $this->callAPI($endpoint, 'POST', $query_parameters, $request_body, []);
        } catch (GuzzleHttp\Exception\GuzzleException $e) {
            return false;
        }
    }







}