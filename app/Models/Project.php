<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function categories()
    {
        return ProjectCategory::where(["id" => $this->category_id])->get();
    }
}