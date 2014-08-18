<?php

    namespace Clops\Tests;

    use Silex\Application;
    use Silex\WebTestCase;

    class baseTest extends WebTestCase
    {
        public function createApplication()
        {
            $app = new Application();

            require __DIR__ . '/../../../resources/config/test.php';
            require __DIR__ . '/../../../src/Bootstrap.php';
            require __DIR__ . '/../../../src/Routes.php';

            return $app;
        }

        /**
         * Making sure we have a 404 page
         */
        public function test404()
        {
            $client = $this->createClient();

            $client->request('GET', '/give-me-a-404');
            $this->assertEquals(404, $client->getResponse()->getStatusCode());
        }

        /**
         * Checking that the index page displays the expected texts
         */
        public function testIndex()
        {
            $client  = $this->createClient();
            $crawler = $client->request('GET', '/');

            $this->assertTrue($client->getResponse()->isOk());
            $this->assertCount(1, $crawler->filter('h1:contains("Welcome")'));
            $this->assertCount(1, $crawler->filter('html:contains("Say hello to your easy silex template")'));
        }

    }
