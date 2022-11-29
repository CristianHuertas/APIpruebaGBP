<?php

namespace Database\Seeders;

use App\Models\Bodega;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BodegasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bodega= new Bodega();
        $bodega->nombre='Bucaramanga';
        $bodega->id_responsable=
        $bodega->save();
    }
}
