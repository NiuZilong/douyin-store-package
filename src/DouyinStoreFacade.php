<?php

namespace Niuzilong\DouyinStorePackage;

use Illuminate\Support\Facades\Facade;

class DouyinStoreFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'DouyinStore';
    }
}
