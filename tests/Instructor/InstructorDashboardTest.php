<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class InstructorDashboardTest extends TestCase
{
    use DatabaseTransactions;
    
    public function test_only_see_instructor_dashboard_if_logged_as_instructor()
    {
        $instructor = factory(App\Entities\Instructor::class)->create([
            'email'    => 'instructor@test.com',
            'password' => bcrypt('instructor')
        ]);

        $this->visit('login')->submitForm([
            'email'    => 'instructor@test.com',
            'password' => 'instructor'
        ])
            ->see("Hi {$instructor->name}!");
    }
}
