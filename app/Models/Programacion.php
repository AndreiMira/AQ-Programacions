<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Programacion
 *
 * @property $id
 * @property $descripcio
 * @property $academic_year
 * @property $modul_id
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Activitat[] $activitats
 * @property Modul $modul
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Programacion extends Model
{
    
    static $rules = [
		'descripcio' => 'required',
		'academic_year' => 'required',
		'modul_id' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcio','academic_year','modul_id','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activitats()
    {
        return $this->hasMany('App\Models\Activitat', 'programacion_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function modul()
    {
        return $this->hasOne('App\Models\Modul', 'id', 'modul_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
