<?php

use App\Author;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
        Author::insert(array(
            'name' => 'Liton',
            'surname' => 'Oliver'
        ));
        Author::insert(array(
            'name' => 'Stpenking',
            'surname' => 'Strrets'
        ));
        Author::insert(array(
            'name' => 'Missaf',
            'surname' => 'Abu'
        ));
    }
}
