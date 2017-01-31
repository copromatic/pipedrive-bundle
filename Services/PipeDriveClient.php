<?php

namespace PipeDriveBundle\Services;

use Benhawker\Pipedrive\Pipedrive;

class PipeDriveClient {

    /** @var  string $key */
    private $key;

    public function __construct($key) {
        $this->key = $key;
    }

    public function get($protocol = 'https', $host = 'api.pipedrive.com', $version = 'v1') {
        return new Pipedrive($this->key, $protocol, $host, $version);
    }

}