<?php

namespace App\Models;

use App\Models\Pajak;
use App\Models\Rekening;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $keyType = 'string';
    protected $table = 'transaksi';
    protected $guarded = [];

    public function rekening()
    {
        return $this->belongsTo(Rekening::class, 'id_rek', 'id');
    }
    public function pajak()
    {
        return $this->belongsTo(Pajak::class, 'id_pajak', 'id');
    }
}
