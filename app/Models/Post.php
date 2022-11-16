<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('commentCount', function ($builder) {
            $builder->withCount('comments');
        });
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getThreadedComments()
    {
        return $this->comments()->with('owner')->get()->threaded();
    }

    public function addComment($attributes)
    {
        $comment = (new Comment)->forceFill($attributes);
        $comment->user_id = auth()->id();

        return $this->comments()->save($comment);
    }
}
