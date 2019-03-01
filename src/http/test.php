<?php
/**
 * Created by PhpStorm.
 * User: coder
 * Date: 2019/3/1
 * Time: 15:26
 */

namespace gogohead\test\http;
use GuzzleHttp\Client;

class test
{
    protected $client;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
        var_dump($this->client);
    }
}