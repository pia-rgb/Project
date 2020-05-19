<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable= [
        'title', 'amount', 'max_price', 'real_price'
    ];

    public function shoppinglists() :\Illuminate\Database\Eloquent\Relations\BelogsToMany{
        return $this->belongsToMany(Shoppinglist::class)->withTimestamps();
    }
}
