<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PicturePost extends Model
{
    protected $fillable = [
        'title',
        'body',
    ];
    protected $date =[
        'created_at' =>'datetime',
        'updated_at' =>'datetime'
    ];
/*     protected $dates =[
        'created_at',
        'updated_at'
    ];
 */
    public function comments()
    {
        return $this->hasMany('App\PictureComment');
    }
}
