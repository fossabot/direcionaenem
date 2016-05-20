<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AdminInstrutorTest extends TestCase
{
    public function test_ver_pagina_de_instrutores()
    {
        $this->visit('admin/instrutores')->see('Instrutores');
    }
}
