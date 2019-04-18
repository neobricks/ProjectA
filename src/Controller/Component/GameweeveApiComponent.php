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
    private function callAPI(
        $endpoint = null,
        $type = 'POST',
        $query_parameters = [],
        $request_body = [],
        $options = [],
        $file_path = null
    ) {
        $headers = $this->http_default_headers;

        $response = $this->client->request($type, $endpoint, [
            'form_params' => $request_body,
            'query' => $query_parameters,
            'headers' => $headers,
        ]);
        //dump($response);
        if (in_array($response->getStatusCode(), $this->http_status_ok)) {
            try {
                return json_decode($response->getBody());
            } catch (Exception $e) {
                dump($response->getBody());
                throw new Exception("Error Decoding Json", 1);
            }
        } else {
            dump($response->getBody());
            return $response;
        }

        //return false;
    }


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
            return $this->callAPI($endpoint, 'POST', $query_parameters);
        } catch (GuzzleHttp\Exception\GuzzleException $e) {

            return false;
        }
    }
    /**
     * @param $data
     * @return bool|mixed
     */
    public function login($data)
    {
        $params = [
            'email',
            'pw',
        ];
        $request_body = [];
        $query_parameters = [];
        foreach ($params as $param) {
            if (isset($data[$param])) {
                $query_parameters['data'][$param] = $data[$param];
            }
        }
        $query_parameters['data']['token'] = 'yyyy';

        //dump($query_parameters);

        $query_parameters['data'] = json_encode($query_parameters['data']);
        $endpoint = '/loginJson.php';
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
            'token'
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
    public function send_reset_pwd($data)
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
        $endpoint = '/sendEmailJson.php';
        try {
            return $this->callAPI($endpoint, 'POST', $query_parameters, $request_body, []);
        } catch (GuzzleHttp\Exception\GuzzleException $e) {
            return false;
        }
    }
    public function change_pwd($data)
    {
        $params = [
            'xyz',
            'key',
            'pw',
        ];
        $request_body = [];
        $query_parameters = [];
        foreach ($params as $param) {
            if (isset($data[$param])) {
                $query_parameters['data'][$param] = $data[$param];
            }
        }
        $query_parameters['data'] = json_encode($query_parameters['data']);
        $endpoint = '/changePWJson.php';

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

    public function user_info($data)
    {
        $params = [
            'email',
            'userNumber'
        ];
        $request_body = [];
        $query_parameters = [];
        foreach ($params as $param) {
            if (isset($data[$param])) {
                $query_parameters['data'][$param] = $data[$param];
            }
        }
        $query_parameters['data'] = json_encode($query_parameters['data']);
        $endpoint = '/getUserInfoJson.php';
        echo $endpoint;
        dump($query_parameters);
        try {
            return $this->callAPI($endpoint, 'GET', $query_parameters, $request_body, []);
        } catch (GuzzleHttp\Exception\GuzzleException $e) {
            return false;
        }
    }


    public function user_update($data)
    {
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
        $endpoint = '/updateUserInfoJson.php';
        try {
            return $this->callAPI($endpoint, 'POST', $query_parameters, $request_body, []);
        } catch (GuzzleHttp\Exception\GuzzleException $e) {
            return false;
        }
    }


    public function user_verify($data)
    {
        $params = [
            'key',
            'xyz'
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
