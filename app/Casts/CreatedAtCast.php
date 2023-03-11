<?php

namespace App\Casts;

use Carbon\Carbon;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class CreatedAtCast implements CastsAttributes
{

    public function get($model, string $key, $value, array $attributes): ?string
    {
        $date = Carbon::parse($value)->diffForHumans();
        return $date;
    }


    public function set($model, string $key, $value, array $attributes): mixed
    {
        return $value;
    }
}
