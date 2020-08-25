<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\PageCategory;

class Page extends Model
{
    public function pageCategory()
    {
        return $this->belongsTo(PageCategory::class);
    }
}
