<?php

use App\Entities\Estudante;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EstudanteLoginTest extends TestCase
{
//    use DatabaseTransactions;

    /**
     * @test
     */
    public function logar()
    {
        $senha = 'maismisesmenosmarx';

        $user = factory(Estudante::class)->create([
            'papel' => 'estudante',
            'senha' => bcrypt($senha)
        ]);

        $this->visit('/login')->submitForm('Login', [
            'email' => $user->email,
            'senha' => $senha
        ])->seePageIs('inicio');
    }

    

}
