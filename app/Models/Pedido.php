<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Pedido
 * @package App\Models
 * @version November 12, 2022, 10:32 pm UTC
 *
 * @property time $hora_pedido
 * @property string $fecha_pedido
 * @property integer $cantidad_pedido
 */
class Pedido extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'pedidos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'menu_id',
        'hora_pedido',
        'fecha_pedido',
        'cantidad_pedido'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fecha_pedido' => 'date',
        'cantidad_pedido' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'menu_id' => 'required',
        'hora_pedido' => 'required',
        'fecha_pedido' => 'required',
        'cantidad_pedido' => 'required'
    ];

    public function menus (){
        return $this->belongsTo('App\Models\Menu', 'menu_id');
        //esta funcion se uso en el index de alumno
    }
}
