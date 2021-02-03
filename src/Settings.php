<?php

namespace Mcpuishor\Settings;

use Illuminate\Support\Facades\Facade;

class Settings extends Facade
{
  protected static function getFacadeAccessor()
  {
    return 'app-settings';
  }
}