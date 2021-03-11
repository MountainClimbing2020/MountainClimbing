<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PicComment extends Model
{
    public function pictures()
    {
        return $this->morphMany(Picture::class, 'target');
    }
}
