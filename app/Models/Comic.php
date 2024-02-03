<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    // protected $fillable = ['title']; //specifico quali campi voglio updateare

    protected $guarded = ['']; //update TUTTI i campi tranne quelli nell array
}
