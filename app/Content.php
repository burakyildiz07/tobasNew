<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function page(){
        return $this->hasOne('App\Pages','id', 'pages_id');
    }

    protected $fillable = [
        'title', 'pages_id', 'slug', 'content' , 'file' , 'status'
    ];
}
