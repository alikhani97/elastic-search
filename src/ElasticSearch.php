<?php
/**
 * Copyright ©  All rights reserved.
 * Developer: Mehdi Alikhani (alikhani.mehdi@hotmail.com)
 */
declare(strict_types=1);

namespace Alikhani\ElasticSearch;

use Illuminate\Contracts\Container\Container;
use Illuminate\Support\Manager;

class ElasticSearch extends Manager
{
    public function __construct(Container $container)
    {
        parent::__construct($container);
    }

    public function getDefaultDriver()
    {
        // TODO: Implement getDefaultDriver() method.
    }
}