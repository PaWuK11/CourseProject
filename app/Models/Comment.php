<?php
namespace App\Models;
use App\Collection\CommentCollection;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['body'];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function newCollection(array $models = [])
    {
        return new CommentCollection($models);
    }
}
