<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['product_id', 'subtotal', 'discount', 'vat', 'total', 'paid', 'due', 'quantity'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
