<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'Event';
    protected $primaryKey = 'idCliente';
    public $timestamps = false;

    protected $fillable = [
        'event', 'start_date', 'end_date'
    ];
}   
