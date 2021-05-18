<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Identity extends Model
{
    use AsSource;
    
    /**
     * @var array
     */
     
    protected $fillable = [
        'username',
        'password'
    ];
}
