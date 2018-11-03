<?php

namespace Tests;


use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;


class DeleteWorkTest extends TestCase
{
    public function testDeleteWorkSuccess()
    {
        $params =[
            'id' => 1
        ];
        $http = new Client();
        $response = $http->post('/works/delete', $params);

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testDeleteWorkFail()
    {
        $params =[
            'id' => 0
        ];
        $http = new Client();
        $response = $http->post('/works/delete', $params);

        $this->assertEquals(500, $response->getStatusCode());
    }


}
