<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
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
                "title"    =>  "20160827 EveryDay",
                "author"   =>   "cufrancis",
                "content"   =>  "This is 2016-08-27 EveryDay!",
                "date"      =>  date("Ymd"),
            ],
            [
                "title"    =>  "20160828 EveryDay",
                "author"   =>   "llnhhy",
                "content"   =>  "This is 2016-08-28 EveryDay!",
                "date"      =>  '20160828',
            ],
        ]);
    }
}
