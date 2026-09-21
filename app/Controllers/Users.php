<?php
namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            ['username' => 'admin',   'full_name' => 'Alice Admin',   'role' => 'Administrator'],
            ['username' => 'cashier1','full_name' => 'Carlo Cruz',    'role' => 'Cashier'],
            ['username' => 'cashier2','full_name' => 'Dina Ramos',    'role' => 'Cashier'],
            ['username' => 'manager', 'full_name' => 'Mark Villanueva','role' => 'Manager'],
            ['username' => 'stock1',  'full_name' => 'Nina Flores',   'role' => 'Inventory Staff'],
        ];

        return view('users/index', ['title' => 'User Accounts', 'users' => $users]);
    }
}
