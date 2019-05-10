<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
    protected $table = 'positions';

    protected $guarded = ['id'];

    protected $casts = [
        'salary' => 'flout',
    ];

    public function staff()
    {
        return $this->belongsTo(Staff::class, "id_position", "id");
    }
}
