<?php

use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('detail_profile')->insert([
            'address' => 'Banyuwangi',
            'nomor_hp' => '08xxxx',
            'ttl' => '2000-08-16',
            'foto' => 'picture.png'
        ]);

    }
}
