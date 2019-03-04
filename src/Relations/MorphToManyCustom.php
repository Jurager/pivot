<?php

namespace Jurager\Laravel\Pivot\Relations;

use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Jurager\Laravel\Pivot\Traits\FiresPivotEventsTrait;

class MorphToManyCustom extends MorphToMany
{
    use FiresPivotEventsTrait;
}
