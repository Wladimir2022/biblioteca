<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    public $incrementing = false;
    public $timestamps = false;
    protected $table='libros';
    protected $primaryKey="ISBN";
    protected $fillable=[
        'ISBN','Nombre','Autor','Páginas','Estado'
    ];
}
