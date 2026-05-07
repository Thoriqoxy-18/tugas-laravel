<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shift;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shift::create([
            'nama_shift'  => 'pagi',
            'jam_mulai'  => '08:00',
            'jam_selesai'  => '16:00',
        ]);

        Shift::create([
            'nama_shift'  => 'malam',
            'jam_mulai'  => '16:00',
            'jam_selesai'  => '00:00',
        ]);
    }
}
