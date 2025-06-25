<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HospitalSeeder extends Seeder
{
    public function run()
    {
        DB::table('hospitals')->insert([
            [
                'nama_rumah_sakit' => 'RSUD Padang',
                'alamat_lengkap' => 'Jl. Sawahan No.17, Padang',
                'no_telepon' => '0751-123456',
                'type_rumah_sakit' => 'Rumah Sakit Umum',
                'latitude' => -0.94924,
                'longitude' => 100.35427,
               
            ],
            [
                'nama_rumah_sakit' => 'RS M. Djamil',
                'alamat_lengkap' => 'Jl. Perintis Kemerdekaan, Padang',
                'no_telepon' => '0751-654321',
                'type_rumah_sakit' => 'Rumah Sakit Pendidikan',
                'latitude' => -0.94785,
                'longitude' => 100.36712,
                
            ],
            [
                'nama_rumah_sakit' => 'RS Ibnu Sina',
                'alamat_lengkap' => 'Jl. Veteran No.45, Padang',
                'no_telepon' => '0751-789101',
                'type_rumah_sakit' => 'Rumah Sakit Khusus',
                'latitude' => -0.95012,
                'longitude' => 100.36001,
                
            ],
            [
                'nama_rumah_sakit' => 'RS Awal Bros',
                'alamat_lengkap' => 'Jl. By Pass No.12, Padang',
                'no_telepon' => '0751-222888',
                'type_rumah_sakit' => 'Rumah Sakit Swasta',
                'latitude' => -0.95170,
                'longitude' => 100.36522,
               
            ],
            [
                'nama_rumah_sakit' => 'RS Hermina Padang',
                'alamat_lengkap' => 'Jl. Belakang Olo No.23, Padang',
                'no_telepon' => '0751-555777',
                'type_rumah_sakit' => 'Rumah Sakit Ibu dan Anak',
                'latitude' => -0.94655,
                'longitude' => 100.35888,
               
            ],
            [
                'nama_rumah_sakit' => 'RS Islam Ibnu Sina',
                'alamat_lengkap' => 'Jl. Jati Baru No.8, Padang',
                'no_telepon' => '0751-336699',
                'type_rumah_sakit' => 'Rumah Sakit Islam',
                'latitude' => -0.94566,
                'longitude' => 100.36110,
                
            ]
        ]);
    }
}
