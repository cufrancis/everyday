<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title'    =>  '20160828',
                'author'    =>  'cufrancis',
                'content'   =>  'This is 2016-08-28 ',
                'date'      =>  date('Ymd'),
            ],
            [
                'title' =>  '20160829',
                'author'    =>  'llnhhy',
                'content'   =>  'this will in 20160829',
                'date'  =>  '20160829',
            ],
        ]);
    }
}
