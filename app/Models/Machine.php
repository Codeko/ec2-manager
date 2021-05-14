<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Machine extends Model
{
    use AsSource;

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'ip',
        'urls',
        'idProject',
        'idSchedule',
        'idIdentity'
        
    ];
}
