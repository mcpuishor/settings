<?php

namespace Mcpuishor\Settings;

use Illuminate\Support\Facades\Facade;

class SettingsFacade extends Facade
{
  protected static function getFacadeAccessor()
  {
    return 'app-settings';
  }
}