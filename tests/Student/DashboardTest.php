<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DashboardTest extends TestCase
{
    /**
     * @test
     */
    public function see_welcome_message()
    {
        $this->visit('/dashboard')->see('Welcome dear student!');
    }
}
