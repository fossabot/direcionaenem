<?php

use App\Entities\Admin;
use App\Entities\Estudante;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AdminEstudantesTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->admin = factory(Admin::class)->create();
    }

    public function test_ver_pagina_de_estudantes_com_cinco_cadastrados()
    {
        $estudantes = factory(Estudante::class, 5)->create();

        $this->actingAs($this->admin)->visit('admin/estudantes');
//
//        foreach ($estudantes as $estudante) {
//            $this->see($estudante->nome);
//        }
    }
}
