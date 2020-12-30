<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'content', 'status', 'published_at'
    ];

    CONST STATUS_MAPPING = [
        0 => '草稿',
        1 => '定時公開',
        2 => '公開'
    ];

    public function getStatusTextAttribute()
    {
        return SELF::STATUS_MAPPING[$this->status];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
