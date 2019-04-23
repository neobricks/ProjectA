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
        if(!empty($options['headers'])) {
            $headers = $options['headers'];            
        }
        $response = $this->client->request($type, $endpoint, [
            'form_params' => $request_body,
            'query' => $query_parameters,
            'headers' => $headers,
        ]);
        if (in_array($response->getStatusCode(), $this->http_status_ok)) {
            try {
                return json_decode($response->getBody());
            } catch (Exception $e) {
                
                throw new Exception("Error Decoding Json", 1);
            }
        } else {
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

        try {
            return $this->callAPI($endpoint, 'GET', $query_parameters, $request_body, []);
        } catch (GuzzleHttp\Exception\GuzzleException $e) {
            return false;
        }
    }


    public function user_update($data)
    {
        $json_params = [
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

        $data_params = [
            "email",
            "userNumber",
            "ranXkey",
        ];

        $query_parameters = [];
        $request_body = ['data' => [], 'json' => []];       
        foreach ($json_params as $param) {
            if (isset($data[$param])) {
                $request_body['json'][$param] = $data[$param];
            }
        }
        foreach ($data_params as $param) {
            if (isset($data[$param])) {
                $request_body['data'][$param] = $data[$param];
            }            
        }
        $request_body['data']['ranXkey'] = "XXXX"; # !important somehow
        $request_body['data'] = json_encode($request_body['data']);
        $request_body['json'] = json_encode($request_body['json']);

        $options = [];
        $options['headers'] = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            //'Content-Type' => 'multipart/form-data',
            'Accept' => '*/*'
        ];
        
        $endpoint = '/updateUserInfoJson.php';
        try {
            return $this->callAPI($endpoint, 'POST', $query_parameters, $request_body, $options);
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
