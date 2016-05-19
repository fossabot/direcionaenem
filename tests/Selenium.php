<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SeleniumTest extends PHPUnit_Extensions_Selenium2TestCase
{
    protected function setUp()
    {
        $this->setBrowser('chrome');
        $this->setBrowserUrl('http://direcionaenem.dev');
    }

    public function testTitle()
    {
        $this->url('http://direcionaenem.dev');
        $this->byName('nome')->value('Se liga que loco o baguio');
        $this->byName('telefone')->value('1234567890');
        $this->byId('cadastrar')->submit();
        $this->assertEquals('Direciona Concursos', $this->title());
    }
}
