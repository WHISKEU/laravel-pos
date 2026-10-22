<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'name' => 'Admin User', 'role' => 'Administrator'],
            ['id' => 2, 'name' => 'Cashier One', 'role' => 'Cashier'],
            ['id' => 3, 'name' => 'Cashier Two', 'role' => 'Cashier'],
            ['id' => 4, 'name' => 'Manager User', 'role' => 'Manager'],
            ['id' => 5, 'name' => 'Staff User', 'role' => 'Staff'],
        ];

        return view('users.index', ['users' => $users]);
    }
}