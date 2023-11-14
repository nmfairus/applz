<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Super Admin', 
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('password')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Admin', 
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([
            'name' => 'Product', 
            'email' => 'product@gmail.com',
            'password' => Hash::make('password')
        ]);
        $productManager->assignRole('Product Manager');

        // Creating UPSM Staf
        $staf = User::create([
            'name' => 'UPSM', 
            'email' => 'upsm@gmail.com',
            'password' => Hash::make('password')
        ]);
        $staf->assignRole('UPSM','Staf');

        // Creating UPPA Staf
        $staf = User::create([
            'name' => 'UPPA', 
            'email' => 'uppa@gmail.com',
            'password' => Hash::make('password')
        ]);
        $staf->assignRole('UPPA','Staf');

        // Creating Normal Staf
        $staf = User::create([
            'name' => 'Normal Staf', 
            'email' => 'staf@gmail.com',
            'password' => Hash::make('password')
        ]);
        $staf->assignRole('Staf');
    }
}