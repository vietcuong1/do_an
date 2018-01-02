<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SimMovie extends Model
{
    //
    protected $table='sim_movies';
    protected $fillable =['sim_id','movie_id','coefficient','id'];
    public function movie(){
        return $this->belongsTo(Movie::class,"sim_id");
    }

}
