<?php

namespace Tests\Application\Sonata\AdminBundle\Functional;

use Symfony\Component\DomCrawler\Form;

class SearchTest extends AbstractLoginTest
{
    const ADMIN_URL = '/admin';
    const SEARCH_FIELD = 'q';
    const SEARCH_QUERY = 'admin';

    /**
     * @var Form
     */
    protected $searchForm;

    protected function setUp()
    {
        parent::setUp();
        $this->submitLoginForm(self::USERNAME, self::PASSWORD);
        $this->crawler = $this->client->request('GET', self::ADMIN_URL);
        $this->searchForm = $this->crawler->selectButton('')->form();
    }

    public function testSearch()
    {
        $this->submitSearch(self::SEARCH_QUERY);
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }

    /**
     * @param string $query
     */
    protected function submitSearch($query)
    {
        $this->searchForm[self::SEARCH_FIELD] = $query;

        $this->crawler = $this->client->submit($this->searchForm);
    }
}
