<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Crop extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = false;

    public function fertilizers(){
        return $this->hasMany(Fertilizer::class,'crops_id','id');
    }
}
