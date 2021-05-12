<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Schedule extends Model
{
    use AsSource;
    
    /**
     * @var array
     */
     
    protected $fillable = [
        'name',
        'cron',
        'state'
    ];
}
