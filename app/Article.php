<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    protected $fillable = ['title', 'slug', 'description_short', 'description', 'image', 'image_show',
        'meta_title', 'meta_description', 'meta_keyword', 'published', 'created_by', 'modified_by'];

    // Mutator
    public function setSlugAttribute($value){
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40) . "-" . Carbon::now()->format('dmyHi'), '-');
    }

    //Polymorphic relation with Categories
    public function categories()
    {
        return $this->morphToMany(Category::class, 'categoryable');
    }
}
