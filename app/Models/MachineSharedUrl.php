<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Screen\AsSource;

class MachineSharedUrl extends Model
{
    public $table = "machinesharedurls";
    use AsSource, Attachable;

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
