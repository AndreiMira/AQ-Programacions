<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Contingut;
use App\Models\Uf;
use App\Models\Modul;
use App\Models\Ra;
use App\Models\Criteri;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        $modul = Modul::create([
            'name' => 'M7',
            'hours' => 33,
            'descripcio' => 'M7 - Laravel',
        ]);
        Uf::create([
            'name' => 'UF1',
            'hours' => 25,
            'modul_id' => Modul::where('name', 'M7')->first()->id,
        ]);
        Uf::create([
            'name' => 'UF2',
            'hours' => 25,
            'modul_id' => $modul->id,
        ]);

        foreach (Uf::all() as $uf) {
            $ras = rand(1, 2);
            for ($i = 1; $i <= $ras; $i++) {
                Ra::create([
                    'name' => 'Ra ' . $i,
                    'uf_id' => $uf->id,
                ]);
            }
        }

        foreach (Ra::all() as $ra) {
            for ($i = 1; $i <= 10; $i++) {
                Criteri::create([
                    'criteris' => 'Criteri ' . $i,
                    'ra_id' => $ra->id,
                ]);

                Contingut::create([
                    'continguts' => 'Contingut ' . $i,
                    'ra_id' => $ra->id,
                ]);
            }
        }
    }
}
