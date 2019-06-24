<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    protected $fillable=['name','description','year','email','phone','faculty_id', 'president_id'];
    public $timestamps = true;

    public function faculty(){
        return $this->belongsTo('App\Faculty');
    }

    public function user(){
        return $this->belongsTo('App\User','president_id');
    }

    public function users()
    {

        return $this->belongsToMany('App\User','association_members');
    }

}
