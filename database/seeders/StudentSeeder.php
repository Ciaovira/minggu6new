<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' => '2031710035',
            'name' => 'Alvira',
            'class' => 'MI2E',
            'department' => 'JTI',
            'phone_number' => '082329363465',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710118', '2031710016',
            'name' => 'Arifatun Nisa',
            'class' => 'MI2E',
            'department' =>'JTI',
            'phone_number' =>'085784751405', '085908806963',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710016',
            'name' => 'Aryandari',
            'class' => 'MI2E',
            'department' =>'JTI',
            'phone_number' =>'085908806963',
        ]);
    }
}
