<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoitureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('voitures')->insert([
            'title' => 'kia rouge',
            'description' => 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens',
            'price' => '60000.00',
            'image' => 'images/voiture/2021-03-25-09-14-50_9a96f27eb7202bd07c31b597a6a3805884552601.jpg',
            'user_id' => 1,
            'created_at' => '2021-03-23 22:45:16',
            'updated_at' => NULL,
        ]);
        
        DB::table('voitures')->insert([
            'title' => 'kia noire',
            'description' => 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens',
            'price' => '65000.00',
            'image' => 'images/voiture/2021-03-25-09-16-59_66adaf543827c9fe7fcc84e8fd4db2fa8aedec8f.jpg',
            'user_id' => 1,
            'created_at' => '2021-03-23 22:45:16',
            'updated_at' => NULL,
        ]);
        
        DB::table('voitures')->insert([
            'title' => 'Toyota rouge',
            'description' => 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens',
            'price' => '70000.00',
            'image' => 'images/voiture/2021-03-25-07-47-47_7dbd511e3f94e21cc5b28d11fa88bac818563ff1.jpg',
            'user_id' => 1,
            'created_at' => '2021-03-23 22:45:16',
            'updated_at' => NULL,
        ]);
        
        DB::table('voitures')->insert([
            'title' => 'Toyota noire',
            'description' => 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens',
            'price' => '80000.00',
            'image' => 'images/voiture/2021-03-25-07-49-42_f4426e5c69fcf94a402007b79f859a92f65aec72.jpg',
            'user_id' => 1,
            'created_at' => '2021-03-23 22:45:16',
            'updated_at' => NULL,
        ]);
        
        DB::table('voitures')->insert([
            'title' => 'Citroën neuf',
            'description' => 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens',
            'price' => '65000.00',
            'image' => 'images/voiture/2021-03-25-08-09-10_edae662750349ad695e912cacf977f778baab4be.jpg',
            'user_id' => 1,
            'created_at' => '2021-03-23 22:45:16',
            'updated_at' => NULL,
        ]);

        DB::table('voitures')->insert([
            'title' => 'Fiat noire',
            'description' => 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens',
            'price' => '70000.00',
            'image' => 'images/voiture/2021-03-25-08-10-58_1ed76d6bbcdcae759a11aaf5d06dc44457f3c409.jpg',
            'user_id' => 1,
            'created_at' => '2021-03-23 22:45:16',
            'updated_at' => NULL,
        ]);


        DB::table('voitures')->insert([
            'title' => 'voiture pigeo',
            'description' => 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens',
            'price' => '52000.00',
            'image' => 'images/voiture/2021-03-25-08-20-10_75ac16a10a90299c515a26214ae5315a111b45b8.jpg',
            'user_id' => 1,
            'created_at' => '2021-03-23 22:45:16',
            'updated_at' => NULL,
        ]);
        
        DB::table('voitures')->insert([
            'title' => 'Porsche noire',
            'description' => 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens',
            'price' => '90000.00',
            'image' => 'images/voiture/2021-03-25-08-21-49_8281428c8b55837114e6ec9ae0f18202e86edddf.jpg',
            'user_id' => 1,
            'created_at' => '2021-03-23 22:45:16',
            'updated_at' => NULL,
        ]);
        DB::table('voitures')->insert([
            'title' => 'Hyundai',
            'description' => 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens',
            'price' => '45000.00',
            'image' => 'images/voiture/2021-03-25-08-23-32_2060316ad7352ec6199c519e31d6f1353dbf02c0.jpg',
            'user_id' => 1,
            'created_at' => '2021-03-23 22:45:16',
            'updated_at' => NULL,
        ]);
    }
}
