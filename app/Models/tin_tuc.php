<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\loai_tin;
class tin_tuc extends Model
{
    use HasFactory;
    public $fillable = [
            'tieu_de',
            'tom_tat',
            'noi_dung',
            'hinh_anh',
            'id_loai',
            'tac_gia',
            'ngay_dang',
            'luot_xem'
    ];
    protected $table = 'tin_tuc';

    public function loaiTin()
    {
        return $this->belongsTo(loai_tin::class,'id_loai','id');
    }
}
