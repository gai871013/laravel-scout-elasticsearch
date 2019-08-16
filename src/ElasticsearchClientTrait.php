<?php

namespace Gai871013\LaravelScoutElasticsearch;

use Elasticsearch\ClientBuilder;

trait ElasticsearchClientTrait
{
    /**
     * Get ElasticSearch Client
     *
     * @return \Elasticsearch\Client
     */
    public function getElasticsearchClient()
    {
        $hosts = config('scout.elasticsearch.hosts');
        $client = ClientBuilder::create()
            ->setHosts($hosts)
            ->build();
        return $client;
    }
}
