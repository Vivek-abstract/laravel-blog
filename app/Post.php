<?php

namespace App;

use Carbon\Carbon;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($id, $comment)
    {
        $this->comments()->create([
            'post_id' => $id,
            'body' => $comment['body'],
            'user_id' => auth()->id(),
        ]);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, $filters)
    {
        if (isset($filters['month'])) {
            $query->whereMonth('created_at', Carbon::parse($filters['month'])->month);
        }

        if (isset($filters['year'])) {
            $query->whereYear('created_at', $filters['year']);
        }

    }

    public static function archives()
    {
        return static::selectRaw("to_char(created_at, 'Month') AS month, to_char(created_at, 'YYYY') AS year    ")
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at)')->get();
    }
}
