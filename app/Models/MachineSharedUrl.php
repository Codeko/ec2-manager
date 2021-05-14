<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class MachineSharedUrl extends Model
{
    public $table = "machinesharedurls";
    use AsSource;

    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'startDate',
        'endDate',
        'image',
        'text',
        'url',
        'idMachine'
    ];
}
