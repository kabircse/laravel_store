<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->delete();
        Author::create(array(
            'name' => 'Liton',
            'surname' => 'Oliver'
        ));
        Author::create(array(
            'name' => 'Stpenking',
            'surname' => 'Strrets'
        ));
        Author::create(array(
            'name' => 'Missaf',
            'surname' => 'Abu'
        ));
    }
}
