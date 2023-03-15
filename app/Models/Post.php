<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = array('user_id', 'type_id', 'slug', 'title', 'author', 'content', 'post_date', 'image_path');

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function isImageAUrl(){
        return filter_var($this->image_path, FILTER_VALIDATE_URL);
    }

    public function technologies(){
        return $this->belongsToMany(Technology::class);
    }
}