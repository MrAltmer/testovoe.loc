<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';

    protected $guarded = ['id'];

    protected $casts = [
        'phone_number' => 'integer',

        'work_experience' => 'integer',

        'birth_date' => 'integer',
    ];

    public function companies()
    {
        return $this->hasMany(Companies::class, "id", "id_staff");
    }

    public function position()
    {
        return $this->hasOne(Positions::class, "id", "id_positions");
    }
}
