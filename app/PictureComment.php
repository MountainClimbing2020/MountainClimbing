<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PictureComment extends Model
{
    protected $fillable = [
        'body',
    ];
    protected $dates =[
        'created_at' =>'integer',
        'updated_at' =>'integer'
    ];
/*     protected $dates =[
        'created_at',
        'up dated_at'
    ];
*/
    public function post()
    {
        return $this->belongsTo('App\PicturePost');
    }
}
