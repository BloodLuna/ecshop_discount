<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    public function goodses()
    {
        return $this->belongsToMany(Goods::class);
    }
}
