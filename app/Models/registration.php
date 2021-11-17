<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class registration
 * @package App\Models
 * @version October 26, 2021, 6:34 pm UTC
 *
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property string $address
 * @property string $birthdate
 * @property integer $age
 * @property string $sex
 */
class registration extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'registration';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'address',
        'birthdate',
        'age',
        'sex'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'firstname' => 'string',
        'middlename' => 'string',
        'lastname' => 'string',
        'address' => 'string',
        'birthdate' => 'date',
        'age' => 'integer',
        'sex' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'firstname' => 'required|string|max:255',
        'middlename' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'birthdate' => 'nullable',
        'age' => 'nullable|integer',
        'sex' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
}
