<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activitylog extends Model
{
    protected $fillable = ['user_id','message','logtime','detail'];

        public function user()
        {
            return $this->belongsTo(User::class, 'user_id');
        }

}
