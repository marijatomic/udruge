<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable=['name','description','start_date','end_date','association_id'];
    public $timestamps = true;

    public function association(){
        return $this->belongsTo('App\Association');
    }
}
