<?php
use App\User;
use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: diegoavelar
 * Date: 26/04/16
 * Time: 14:26
 */
class UsersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Diego Avelar',
            'email'    => 'diegoarmando2011@gmail.com',
            'password' => bcrypt('q1w2r4e3')
        ]);
    }
}