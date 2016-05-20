<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AdminLoginTest extends TestCase
{
    public function test_ver_pagina_de_login()
    {
        $this->visit('admin/login')->see('Admin :: Login');
    }

    public function test_logar()
    {
        $senha = 'maismisesmenosmarx';

        $admin = factory(App\Entities\Admin::class)->create([
            'papel' => 'admin',
            'senha' => bcrypt($senha)
        ]);

        $this->visit('admin/login')->submitForm('Login', [
            'email' => $admin->email,
            'senha' => $senha
        ])->seePageIs('admin/inicio');
    }

}
