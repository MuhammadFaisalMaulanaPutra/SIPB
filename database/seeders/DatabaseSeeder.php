<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        \App\Models\User::factory(50)->create();
        
        \App\Models\Role::factory(10)->create();
        
        \App\Models\UserRole::factory(50)->create();
        
        \App\Models\Provinsi::factory(10)->create();
     
        \App\Models\Kota::factory(30)->create();
        
        \App\Models\Kecamatan::factory(50)->create();
        
        DB::table('kategori_bencana')->insert([
            ['Kategori_Bencana'=> 'Alam'],['Kategori_Bencana'=> 'Non-Alam']
        ]);
        
        \App\Models\Bencana::factory(10)->create();
        
        \App\Models\Pelaporan::factory(50)->create();
        
        \App\Models\DetailKorban::factory(100)->create();

         
        // DB::table('users')->insert([
        //     'Name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'tgl_lahir' => Str::random(10),
        //     'password' => Hash::make('password'),
        // ]);


    }
}
