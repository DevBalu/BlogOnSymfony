<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class aboutControllerTest extends WebTestCase
{
    public function testInsertinfo()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/insertInfo');
    }

    public function testUpdateinfo()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/updateInfo');
    }

}
