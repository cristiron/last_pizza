<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(MenuTableSeeder::class);
    }
}
class MenuTableSeeder extends DatabaseSeeder
{
    public function run()
    {
        DB::table('menu')->delete();
        DB::table('menu')->insert(
            array (array(
                'dish' => 'marinara', 'price'=> 3
            ),array( 'dish' => 'margherita', 'price'=> 7

            ))
        );
    }
}