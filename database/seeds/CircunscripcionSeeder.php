<?php

use Illuminate\Database\Seeder;
use App\Core\Models\Circunscripcion;
class CircunscripcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Circunscripcion::create([
            'nro' => 55
        ]);
    }
}
