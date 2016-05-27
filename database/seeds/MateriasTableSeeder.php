<?php

use App\Entities\Materia;
use Illuminate\Database\Seeder;

class MateriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Materia::create([
            'titulo' => 'Biologia',
            'imagem' => '1.png'
        ]);

        Materia::create([
            'titulo' => 'Filosofia',
            'imagem' => '2.png'
        ]);

        Materia::create([
            'titulo' => 'Física',
            'imagem' => '3.png'
        ]);

        Materia::create([
            'titulo' => 'Geografia',
            'imagem' => '4.png'
        ]);

        Materia::create([
            'titulo' => 'História',
            'imagem' => '5.png'
        ]);

        Materia::create([
            'titulo' => 'Matemática',
            'imagem' => '6.png'
        ]);

        Materia::create([
            'titulo' => 'Português',
            'imagem' => '7.png'
        ]);

        Materia::create([
            'titulo' => 'Química',
            'imagem' => '8.png'
        ]);

        Materia::create([
            'titulo' => 'Sociologia',
            'imagem' => '9.png'
        ]);
    }
}
