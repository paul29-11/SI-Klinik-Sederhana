<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class rekam extends Model
{
    use HasFactory;

    protected $table = "rekam";
    protected $fillable = ['id','tgl_periksa','pasien_id', 'keluhan','dokter_id','diagnosa','obat_id','ruang_id'];
    
    public function pasien(): BelongsTo
    {
        return $this->belongsTo(pasien::class);
    }
    public function dokter(): BelongsTo
    {
        return $this->belongsTo(dokter::class);
    }
    public function obat(): BelongsTo
    {
        return $this->belongsTo(obat::class);
    }
    public function ruang(): BelongsTo
    {
        return $this->belongsTo(ruang::class);
    }

    
    

    
}
