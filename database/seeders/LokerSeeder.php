<?php

namespace Database\Seeders;

use App\Models\Loker;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LokerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seeder
        Loker::insert([
            'user_id' => 1,
            'nama_perusahaan' => 'Tesla, Inc.',
            'alamat' => 'Austin, Texas, Amerika',
            'email' => 'contact@tesla.com',
            'loker' => 'Data Scientist',
        ]);

        // Faker
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 20; $i++) {
            Loker::insert([
                'user_id' => 1,
                'nama_perusahaan' => $faker->company,
                'alamat' => $faker->address,
                'email' => $faker->companyEmail,
                'loker' => $faker->jobTitle,
            ]);
        }
    }
}
