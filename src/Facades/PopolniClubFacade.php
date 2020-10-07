<?php

namespace PopolniClubLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class PopolniClubFacade extends Facade
{

    protected static function getFacadeAccessor()
    {

        return 'popolniclubLaravel';

    }

}
