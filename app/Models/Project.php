<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Project extends Model
{
    use AsSource;
    
    /**
     * @var array
     */
     
    protected $fillable = [
        'name',
        'idUser'
    ];
        protected $casts = [
        'created_at' => 'datetime:Y-m-d' ,
        'updated_at' => 'datetime:Y-m-d' 
    ];
}
