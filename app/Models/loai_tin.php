<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tin_tuc;
class loai_tin extends Model
{
    use HasFactory;
    protected $fillable = [
            'ten_loai'
    ];
    protected $table = 'loai_tin';

    public function tinTuc()
    {
        return $this->hasMany(tin_tuc::class);
    }
}
