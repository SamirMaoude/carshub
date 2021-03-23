<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\UserTableSeeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(RoleTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        //$this->call(UserTableSeeder::class);
        $this->call(VoitureTableSeeder::class);
    }
}
