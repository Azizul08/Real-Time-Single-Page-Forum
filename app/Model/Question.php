<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
<<<<<<< HEAD
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
=======
    //
>>>>>>> b75c1a90df94ab6f4564af9cea7f18a758de2b12
}
