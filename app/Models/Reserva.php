<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Reserva extends Model
{
    use HasFactory;
    protected $table='reservas';
    protected $primaryKey="r_id";
    public $timestamps = false;
    protected $fillable=[
        'libros','user','fecha','dias','FechaFinal'
    ];
}
