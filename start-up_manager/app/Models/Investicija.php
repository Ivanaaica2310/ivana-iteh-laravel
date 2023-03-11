<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investicija extends Model
{
    use HasFactory;

    protected $table = 'investicije';

    protected $fillable = [
        'vrednost',
        'kredit',
        'investitor_id',
        'startup_id',
    ];

    public function investitor()
    {
        return $this->belongsTo(Investitor::class);
    }

    public function startup()
    {
        return $this->belongsTo(Startup::class);
    }
}