<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory,softDeletes;

    protected $guarded;
    
    public function post()
    {
        return $this->belongsTo(Post::Class);
    }
}
