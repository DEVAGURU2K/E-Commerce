<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addproduct extends Model
{
    use HasFactory;
    protected $table='addproducts';

    public function addcags(){
        return $this->belongsTo(addcags::class);
    }

}
