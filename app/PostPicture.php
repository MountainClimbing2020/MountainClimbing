<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostPicture extends Model
{
    public function pictures()
    {
    return $this->morphMany(Picture::class, 'target');
    }
    public function piccomments()
    {
        return $this->hasMany(PicComment::class);
    }
}
