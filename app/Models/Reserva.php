<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Reserva
 * @package App\Models
 * @version November 12, 2022, 10:46 pm UTC
 *
 * @property time $hora_reserva
 * @property string $fecha_reserva
 */
class Reserva extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'reservas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'mesa_id',
        'hora_reserva',
        'fecha_reserva'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fecha_reserva' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'mesa_id' => 'required',
        'hora_reserva' => 'required',
        'fecha_reserva' => 'required'
    ];

    
}
