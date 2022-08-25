<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biaya extends Model
{
    use HasFactory;
    protected $table = "biaya";
    protected $guarded = [];

    public function kos()
    {
        return $this->belongsTo(Kos::class);
    }
}
