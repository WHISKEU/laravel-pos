<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Customer::create([
            'full_name' => 'Juan Dela Cruz',
            'email' => 'juan@example.com',
            'phone' => '09171234567',
        ]);

        Customer::create([
            'full_name' => 'Maria Santos',
            'email' => 'maria@example.com',
            'phone' => '09181234567',
        ]);

        Customer::create([
            'full_name' => 'Pedro Reyes',
            'email' => 'pedro@example.com',
            'phone' => '09191234567',
        ]);

        Customer::create([
            'full_name' => 'Ana Garcia',
            'email' => 'ana@example.com',
            'phone' => '09201234567',
        ]);

        Customer::create([
            'full_name' => 'Luis Mendoza',
            'email' => 'luis@example.com',
            'phone' => '09211234567',
        ]);

        User::create([
            'username' => 'admin',
            'full_name' => 'Admin User',
        ]);

        User::create([
            'username' => 'cashier1',
            'full_name' => 'Cashier One',
        ]);

        User::create([
            'username' => 'cashier2',
            'full_name' => 'Cashier Two',
        ]);

        User::create([
            'username' => 'manager',
            'full_name' => 'Manager User',
        ]);

        User::create([
            'username' => 'staff',
            'full_name' => 'Staff User',
        ]);
    }
}