<?php

namespace Database\Seeders;

use App\Enums\PermissionsEnum;
use App\Enums\RolesEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $adminRole = Role::create(['name' => RolesEnum::Admin->value]);
        $userRole = Role::create(['name' => RolesEnum::User->value]);
        $vendorRole = Role::create(['name' => RolesEnum::Vendor->value]);

        $buyPermission = Permission::create(['name' => PermissionsEnum::BuyProduct->value]);
        $sellPermission = Permission::create(['name' => PermissionsEnum::SellProduct->value]);
        $approveVendorPermission = Permission::create(['name' => PermissionsEnum::ApproveVendor->value]);

        $adminRole->syncPermissions([$buyPermission, $sellPermission, $approveVendorPermission]);
        $vendorRole->syncPermissions([$buyPermission, $sellPermission]);
        $userRole->givePermissionTo($buyPermission);
    }
}
