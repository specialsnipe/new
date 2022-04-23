<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Filterable;
    protected $guarded=false;

    public function getDateAttribute($value){
        return Carbon::createFromFormat('Y-m-d',$value)->format('d.m.Y');
    }

}
