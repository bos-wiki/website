<?php

namespace Domain\Common\Concerns;

use Domain\Common\Models\Address;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasAddresses
{
    public function address(): MorphOne
    {
        return $this->morphOne(Address::class, 'addressable');
    }
}
