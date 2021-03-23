<?php

namespace Database\Seeders;

use App\Models\Role_user;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);


        if($user)
        {	 	
           				       	     	
            $p = new Role_user();
            $p->role_id= 2;
            $p->user_id= $user->id;
                  $p->save();	
            if($p){
              
              return $user;
            }	  
        }
    }
}
