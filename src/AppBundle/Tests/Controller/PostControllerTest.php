<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostControllerTest extends WebTestCase
{
    public function testAddpost()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addPost');
    }

    public function testSavepost()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/savePost');
    }

    public function testUpdatepost()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/updatePost');
    }

    public function testDeletepost()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deletePost');
    }

}
