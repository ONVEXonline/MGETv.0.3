<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Models\Project;

class Comment extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
