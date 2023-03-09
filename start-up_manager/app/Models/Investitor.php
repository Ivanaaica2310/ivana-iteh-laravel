<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investitor extends Model
{
    use HasFactory;

    public function investicije()
    {
        return $this->hasMany(Investicija::class);
    }
}
