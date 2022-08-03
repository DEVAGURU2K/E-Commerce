<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addcags extends Model
{
    use HasFactory;
    protected $table='addcags';

    public function addcags(){
        return $this->hasMany(addcags::class);
    }
}
