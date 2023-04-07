<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function perusahaan()
    {
        return $this->hasMany(Perusahaan::class);
    }
}
