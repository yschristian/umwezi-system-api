<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]
        ->forgetCachedPermissions();
        $addUser='Add User';
        $CreateProduct = 'Create Product';
        $getAllProduct ='get product';
        $getAllUser ='get user';
        $makeOrder = 'make order';
        Permission ::create(['name'=> $addUser]);
        Permission ::create(['name'=> $CreateProduct]);
        Permission ::create(['name'=> $getAllProduct]);
        permission ::create(['name'=> $getAllUser]);
        
        //Define roles Available
        $admin = 'admin';
        $farmer = 'farmer';
        $salesPerson= 'sales-person';
    
        Role::create(['name'=> $admin])
            ->givePermissionTo(Permission::all());
        Role::create(['name'=> $farmer])
            ->givePermissionTo([
                $CreateProduct,
                $getAllProduct
            ]);
        Role::create(['name'=> $salesPerson])
            ->givePermissionTo([
                $makeOrder,
                $getAllProduct
            ]);
    }
}
