<?php

namespace Devsbuddy\AdminCraft\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Devsbuddy\AdminCraft\AdminCraft
 */
class AdminCraft extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Devsbuddy\AdminCraft\AdminCraft::class;
    }
}
