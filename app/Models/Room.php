<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public function getRouteKeyName()
    {
        return "slug";
    }
    protected $fillable = [
        "title",
        "user_id",
        "desc",
        "file_name",
        "slug"
    ];
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
