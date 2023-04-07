<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function JenisBarang()
    {
        return $this->belongsTo(JenisBarang::class);
    }

    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }
}
