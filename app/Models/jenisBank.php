<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BankModel;

class jenisBank extends Model
{
    use HasFactory;
    protected $table = "jenis_bank";
    protected $primaryKey = "kode_jenis";

    protected $fillable = [
        'kode_jenis',
        'nama_jenis'
        
    ];

    public function tbl_bank()
    {
        return $this->belongsTo(BankModel::class);
    }

    public $timestamps=false;
}

