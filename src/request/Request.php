<?php
/**
 * Created by PhpStorm.
 * User: Matthew
 * Date: 9/4/2015
 * Time: 10:44 AM
 */

namespace F2klabs\Govtrack\request;

use \GuzzleHttp\Client;

class Request {

    /**
     * Guzzle Client
     */
    public $client;

    public function __construct(){
        $this->setClient();
    }

    public function setClient()
    {
        //Guzzle Client
        $this->client = new Client([
            "base_uri"=> "https://restapi.actonsoftware.com"
        ]);
    }

    /**
     * @param $endpoint
     * @param array $options
     * @return mixed
     */
    public function search($endpoint, Array $options = []){
        return $this->_makeRequest($endpoint, $options);
    }

    /**
     * @param $endpoint
     * @param $id
     * @return mixed
     */
    public function get($endpoint, $id){
        return $this->_makeRequest($endpoint . "/" . $id);
    }

    /**
     * @param $uri
     * @param $options
     * @param string $method
     * @return mixed
     */
    private function _makeRequest($uri, $options = [], $method = 'GET')
    {
        return $this->client
            ->request($method, $uri, ['query'=>$options]);
    }
}