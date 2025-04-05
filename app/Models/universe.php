<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class universe extends Model
{
    protected $fillable = [
        'name'
    ];
    public function universe()
    {
        return $this->belongsTo(Universe::class);
    }
}

