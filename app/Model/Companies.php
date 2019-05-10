<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $table = 'companies';

    protected $guarded = ['id'];

    public function staff()
    {
        return $this->belongsTo(Staff::class, "id_staff", "id");
    }
}
