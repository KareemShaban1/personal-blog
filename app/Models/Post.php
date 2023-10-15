<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;

class Post extends Model implements Viewable
{
    use InteractsWithViews;
    use HasFactory;
    
    protected $fillable = ['title', 'content', 'image', 'cat_id', 'user_id', 'slug', 'status'];

    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->diffForHumans()
        );
    }

    public function getNextAttribute(){
        return static::wherecatId($this->cat_id)->where('id', '>', $this->id)->whereStatus(true)->orderBy('id','asc')->first();
    }

    public function getPreviousAttribute(){
        return static::wherecatId($this->cat_id)->where('id', '<', $this->id)->whereStatus(true)->orderBy('id','desc')->first();
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}