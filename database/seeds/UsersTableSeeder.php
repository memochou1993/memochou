<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(config('factories.user'));

        factory(User::class, config('seeds.user.number'))->create();
    }
}
