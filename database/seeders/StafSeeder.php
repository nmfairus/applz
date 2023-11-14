<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StafSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stafs = [
            ['name' =>'Abdul Jalil Bin Hassan@Mat Hassan','email' =>'jalil@jtm.gov.my','password' =>Hash::make('password')],
            ['name' =>'Zamzurami Bin Mukhtar','email' =>'zamzurami@jtm.gov.my','password' =>Hash::make('password')],

        ];

        foreach ($stafs as $staf) {
            User::create($staf)->assignRole('Staf');
          }

        // User::insert($staf);
        
    }
}
