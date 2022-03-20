<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'transaction_details';


    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'products_id');
    }
}
