<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Role_user;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin@admin'),
        ]);

        if($admin)
        {
            $p = new Role_user();
			   $p->role_id= 1;
			   $p->user_id= $admin->id;
               $p->save();	
        }
    }
}
