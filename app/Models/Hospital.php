<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    // Nama tabel, sesuai dengan migration
    protected $table = 'hospitals';

    // Primary key sesuai migration
    protected $primaryKey = 'id';

    // Field yang bisa diisi melalui mass assignment (create/update)
    protected $fillable = [
        'nama_rumah_sakit',
        'alamat_lengkap',
        'no_telepon',
        'type_rumah_sakit',
        'latitude',
        'longitude',
    ];

    // Optional: jika kamu tidak pakai auto-increment ID atau timestamps
    public $incrementing = true;
    public $timestamps = true;

    // Optional: jika primary key bukan tipe integer
    // protected $keyType = 'int';
}
