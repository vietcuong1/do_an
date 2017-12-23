<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $table='movies';
    protected $fillable =['title','year','plot','price','dis_price','poster','total','rating'];
    public function recommendation(){
        return $this->hasMany(Recommendation::class,"movie_id")->orderBy('rating');
    }
}
