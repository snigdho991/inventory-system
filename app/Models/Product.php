<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_name', 'purchase_price', 'sell_price', 'stock'];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
