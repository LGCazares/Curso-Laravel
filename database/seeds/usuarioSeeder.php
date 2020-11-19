<?php

use Illuminate\Database\Seeder;
use App\Usuario;
class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Usuario::class, 20000)->create();
    }
}
