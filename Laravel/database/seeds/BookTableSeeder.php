<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('book')->insert([
            [
                'id'=>1,
                'name'=>'book1',
                'del'=>0
            ],
            [
                'id'=>2,
                'name'=>'book2',
                'del'=>0
            ],
            [
                'id'=>3,
                'name'=>'book3',
                'del'=>1
            ],
        ]);
    }
}
