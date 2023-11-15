<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonans extends Model
{
    use HasFactory;

    public $timestamps = true;
    
    protected $fillable = [
        'tanggal',
        'namapemohon',
        // 'unitkerja',
        'staffdimohon',
        'status',
        'created_at',
        'updated_at',
    ];
}