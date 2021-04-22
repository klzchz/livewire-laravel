<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;
    protected  $fillable = ['content'];


    /**
     *
     * Relationship N TO 1
     *
    **/

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
