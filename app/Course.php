<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Concerns\UsesUuid;

class Course extends Model
{
    use UsesUuid;
    
    protected $fillable = [
        'title', 'desc', 'type',
    ];
}
