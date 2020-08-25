<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Page;

class PageCategory extends Model
{
    public function page()
    {
        return $this->hasMany(Page::class);
    }
}
