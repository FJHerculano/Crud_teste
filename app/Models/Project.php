<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    // Dados com permissão a serem alterados no banco de dados
    protected $fillable = [
        'project',
        'client',
        'date_initial',
        'deadline',
        'budget',
        'status',
        'situacao',
    ];

    protected $dates =  ['date_initial','deadline'];

}
