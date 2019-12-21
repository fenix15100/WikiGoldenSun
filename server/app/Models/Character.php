<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Character extends Model
{

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'character_id';

    protected $fillable=[
        'name',
        'internacionalName',
        'age',
        'description',
        'photo',
        'thumbail',
        //adeptType #TODO crear modelo elements
        'history',
        'family' #TODO sera una string separada por semicolon con las id de los characters
    ];


    /**
     * @return HasMany
     */
    public function getDjinns(){
        return $this->hasMany( 'App\Djinns', 'character_id', 'character_id' );
    }

}


