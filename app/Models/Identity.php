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
        'name',
        'username',
        'password'
    ];
    
    protected $casts = [
        'created_at' => 'datetime:Y-m-d' ,
        'updated_at' => 'datetime:Y-m-d' 
    ];
}
