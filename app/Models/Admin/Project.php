<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['name','category_id', 'featured', 'description', 'image', 'image_alt', 'keywords', 'slug'];
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
