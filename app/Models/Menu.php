<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;
    protected $table = '2121110068_menu';

    protected $fillable = [
        'name',
        'link',
        'table_id',
        'type',
        'updated_by',
        'created_by',
    ];
}
