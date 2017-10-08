<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $fillable = [
        'page_name', 'status', 'slug',
    ];

    public function contents(){
        return $this->hasMany('App\Content','pages_id', 'id');
    }


}
