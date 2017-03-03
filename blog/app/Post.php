<?php

namespace App;

class Post extends Model
{
    public function comments(){

        return $this->hasMany(Comment::class);

    }

    public function user(){

        return $this->belongsTo(User::class);

    }

    public function addComment($body){

        $this->comments()->create(compact('body'));

    }

    public function scopreFilter($query, $filters)
    {
    	if ($month = request('month')){
    		$posts->whereMonth('created_at', Carbon::parse($month)->month);
    	}

    	if ($year = request('year')){
    		$posts->whereYear('created_at', $year);
    	}

    }
}
