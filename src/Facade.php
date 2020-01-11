<?php

namespace GeneralSystemsVehicle\JustReadTheInstructions;

use Illuminate\Support\Facades\Facade as FacadeParent;

class Facade extends FacadeParent {
   protected static function getFacadeAccessor() { return 'JustReadTheInstructions-helper'; }
}
