<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssociationMember extends Model
{
    protected $fillable=['user_id','association_id'];
    public $timestamps = true;

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function association(){

        return $this->belongsTo('App\Association');
    }


}
