<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Djinns extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'djiin_id';

    protected $fillable=[
        'name',
        'description',
        'obtaining',
        'strategy',
        'photo',
        'thumbail',
        'character_id'
        //element #TODO crear modelo elements
    ];

    /**
    * @return \Illuminate\Database\Eloquent\Relations\HasOne
    */
    public function getCharacter(){
        return $this->hasOne( 'App\Character', 'character_id', 'character_id' );
    }
}
