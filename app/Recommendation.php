<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    //
    protected $table='recommendations';
    protected $fillable =['user_id','movie_id','rating','id'];
    public function movie(){
        return $this->belongsTo(Movie::class,"movie_id");
    }

}
