<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wenda extends Model
{
    protected $fillable=[
        'title',
        'body',
        'user_id'
    ];

    public function user(){
        $this->belongsTo('App\User');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }

    public function getTagListAttribute(){
        return $this->tags->lists('id')->toArray();
    }



}
