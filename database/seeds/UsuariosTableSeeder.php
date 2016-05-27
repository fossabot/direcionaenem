<?php
use App\Entities\Admin;
use App\Entities\Estudante;
use App\Entities\Instrutor;
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
        $instrutor = Instrutor::create([
            'nome'      => 'Instrutor',
            'sobrenome' => 'Instruído',
            'email'     => 'instrutor@gmail.com',
            'password'  => bcrypt('q1w2r4e3')
        ]);

        Estudante::create([
            'nome'         => 'Estudante',
            'sobrenome'    => 'Estudioso',
            'email'        => 'estudante@gmail.com',
            'instrutor_id' => $instrutor->id,
            'password'     => bcrypt('q1w2r4e3')
        ]);

        Admin::create([
            'nome'      => 'Admin',
            'sobrenome' => 'Admininstrador',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('q1w2r4e3')
        ]);
    }
}