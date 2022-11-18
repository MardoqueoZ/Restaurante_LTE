<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Menu
 * @package App\Models
 * @version November 12, 2022, 10:26 pm UTC
 *
 * @property string $desc_menu
 * @property integer $costo
 */
class Menu extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'menus';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'desc_menu',
        'costo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'desc_menu' => 'string',
        'costo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'desc_menu' => 'required',
        'costo' => 'required'
    ];

    
}
