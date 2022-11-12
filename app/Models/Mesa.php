<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Mesa
 * @package App\Models
 * @version November 12, 2022, 10:16 pm UTC
 *
 * @property string $desc_mesa
 * @property integer $costo
 */
class Mesa extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'mesas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'desc_mesa',
        'costo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'desc_mesa' => 'string',
        'costo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'desc_mesa' => 'require',
        'costo' => 'require'
    ];

    
}
