<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;



class Shoppinglist extends Model
{
    protected $fillable = [
        'title','user_id', 'items', 'done_until'
    ];

    /**
     * book is assigned to user (n : 1)
     */
    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function items() : BelongsToMany {
        return $this->belongsTo(Items::class)->withTimestamps();
    }



}
