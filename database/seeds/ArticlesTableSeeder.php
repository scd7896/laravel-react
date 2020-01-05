<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = App\User::all();

        foreach($users as $user){
            $user->articles()->save(
                factory(App\Article::class)->make()
            );
        }
    }
}
