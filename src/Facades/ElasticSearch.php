<?php
/**
 * Copyright ©  All rights reserved.
 * Developer: Mehdi Alikhani (alikhani.mehdi@hotmail.com)
 */
declare(strict_types=1);

namespace Alikhani\ElasticSearch\Facades;

use Illuminate\Support\Facades\Facade;

class ElasticSearch extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'elastic-search';
    }
}