<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
    //protected $fillable = ['title',' slug','body','category_id','User_id'];
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function replies()
    {
        return $this-> hasMany(Reply::class);
    }
    public function category()
    {
        return $this-> hasMany(category::class);
    }
    public function getPathAttribute()
    {
        return asset("api/question/$this->slug");
    }
}
