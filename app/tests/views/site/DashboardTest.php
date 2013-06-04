<?php

class DashboardTest extends TestCase {

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testIndexResponse()
    {
        $crawler = $this->client->request('GET', '/');

        $this->assertTrue($this->client->getResponse()->isOk());
        // $this->assertCount(1, $crawler->filter('h1:contains("Dashboard")'));
    }

    // public function testHeaderLink()
    // {

    // }

}
