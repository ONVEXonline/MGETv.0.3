<?php

namespace App\Models;

use App\Models\Timeline;
use App\Models\Comment;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function timeline()
    {
        return $this->belongsTo(Timeline::class);
    }
    //
    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
}
