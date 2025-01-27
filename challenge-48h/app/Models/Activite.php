<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    protected $fillable = [
        'nom',
        'description',
        'zone',
        'creator_id'
    ];


    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }


}
