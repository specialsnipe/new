<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportStatus extends Model
{
    protected $guarded = false;


    const IN_PROGRESS = 1;
    const SUCCESS = 2;
    const FAIL = 3;

    public static function getStatus()
    {
        return [
            self::IN_PROGRESS=>'в процессе',
            self::SUCCESS=>'Успех',
            self::FAIL=>'ошибка',
        ];
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
