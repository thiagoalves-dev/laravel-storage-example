<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'total_price',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
