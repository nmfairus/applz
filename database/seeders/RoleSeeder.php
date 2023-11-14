<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);
        $productManager = Role::create(['name' => 'Product Manager']);
        $staf = Role::create(['name' => 'Staf']);
        $upsm = Role::create(['name' => 'UPSM']);
        $uppa = Role::create(['name' => 'UPPA']);

        $admin->givePermissionTo([
            'create-user',
            'edit-user',
            'delete-user'
        ]);

        $productManager->givePermissionTo([
            'create-product',
            'edit-product',
            'delete-product'
        ]);

        $upsm->givePermissionTo([
            'create-aduanict',
            'edit-aduanict',
            'delete-aduanict'
        ]);

        $uppa->givePermissionTo([
            'create-aduanuppa',
            'edit-aduanuppa',
            'delete-aduanuppa'
        ]);

        $staf->givePermissionTo([
            'view-staf'
        ]);
    }
}
