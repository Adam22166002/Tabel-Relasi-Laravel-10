<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JenisBank;

class BankModel extends Model
{
    use HasFactory;
    protected $table = "tbl_bank";
    protected $primaryKey = "kode_bank";

    protected $fillable = [
        'kode_bank',
        'nama_bank',
        'jenis_bank',
        'alamat',
        'kota',
        'provinsi',
        'kode_pos',
        'nomer_telepon',
        'email',
        'deskripsi'
    ];

    public function jenisBank()
        {
            return $this->belongsTo(JenisBank::class, 'jenis_bank', 'kode_jenis');
        }
    public $timestamps = false;
}
