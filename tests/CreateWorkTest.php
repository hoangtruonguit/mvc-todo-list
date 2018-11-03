<?php

namespace Tests;


use \GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;


class CreateWorkTest extends TestCase
{
    public function testCreateWorkSuccess()
    {
        $params =[
            'id' => 1,
            'name' => $this->generateRandomString(),
            'status' => 2,
            'start_date' => '2018-11-22',
            'end_date' => '2018-11-30'
        ];
        $http = new Client();
        $response = $http->post('/works/update', $params);

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testCreateWorkFail()
    {
        $params =[
            'id' => 1,
            'name' => null,
            'status' => 2,
            'start_date' => '2018-11-22',
            'end_date' => '2018-11-30'
        ];
        $http = new Client();
        $response = $http->post('/works/update', $params);

        $this->assertEquals(500, $response->getStatusCode());
    }

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
