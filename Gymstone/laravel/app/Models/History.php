<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class History extends Model
{
    use HasFactory;

    public function trainingsStored()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }
    
}
