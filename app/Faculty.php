<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable=['name','short_name','address','email','phone'];
    public $timestamps = true;

    public function associations()
    {
        return $this->hasMany('App\Association');
    }

}
