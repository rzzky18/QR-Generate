<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $fillable = ['nama', 'tempat_tinggal', 'nip', 'email'];
}
