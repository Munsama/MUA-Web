<?php

use Illuminate\Database\Seeder;

class admintableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modeladmins')->insert([
            'uname' => 'admin',
            'psw' => 'admin',
        ]);
    }
}
