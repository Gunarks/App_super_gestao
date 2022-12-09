<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    use HasFactory;

    // Método protecd
    protected $tabble = 'providers';
    protected $fillable = ['name', 'site', 'uf', 'email'];
}
