<?php
use App\Entities\Usuario;
use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'nome'  => 'Diego Avelar',
            'email' => 'diegoarmando2011@gmail.com',
            'papel' => 'estudante',
            'senha' => bcrypt('q1w2r4e3')
        ]);
    }
}