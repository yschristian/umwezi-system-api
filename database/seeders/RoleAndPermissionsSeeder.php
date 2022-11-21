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
        $deleteProduct='delete product';
        $updateProduct='view product';
        $getAllUser ='get user';
        $makeOrder = 'make order';
        $getAllOrder ='get allOrder';
        $approveOrder='approve Order';
        $getUserOrder='get user order';
        Permission ::create(['name'=> $addUser]);
        Permission ::create(['name'=> $CreateProduct]);
        Permission ::create(['name'=> $getAllProduct]);
        permission ::create(['name'=> $getAllUser]);
        permission ::create(['name'=> $makeOrder]);
        permission ::create(['name'=> $getAllOrder]);
        permission ::create(['name'=> $approveOrder]);
        permission ::create(['name'=> $getUserOrder]);
        //Define roles Available
        $admin = 'admin';
        $farmer = 'farmer';
        $salesPerson= 'sales-person';
        $clients= 'clients';
    
        Role::create(['name'=> $admin])
            ->givePermissionTo(Permission::all());
        Role::create(['name'=> $farmer])
            ->givePermissionTo([
                $CreateProduct,
                $getAllProduct,
                $getUserOrder,
                $makeOrder
            ]);
        Role::create(['name'=> $salesPerson])
            ->givePermissionTo([
                $makeOrder,
                $getAllProduct,
                $getUserOrder
            ]);
            Role::create(['name'=> $clients])
            ->givePermissionTo([
                $makeOrder,
                $getAllProduct,
                $getUserOrder
            ]);
    }
}
