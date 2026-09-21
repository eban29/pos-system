<?php
namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            ['full_name' => 'Maria Santos',  'email' => 'maria@example.com',  'phone' => '0917-111-2222'],
            ['full_name' => 'Juan Dela Cruz','email' => 'juan@example.com',   'phone' => '0917-333-4444'],
            ['full_name' => 'Ana Reyes',     'email' => 'ana@example.com',    'phone' => '0917-555-6666'],
            ['full_name' => 'Pedro Lim',     'email' => 'pedro@example.com',  'phone' => '0917-777-8888'],
            ['full_name' => 'Liza Tan',      'email' => 'liza@example.com',   'phone' => '0917-999-0000'],
        ];

        return view('customers/index', ['title' => 'Customer Accounts', 'customers' => $customers]);
    }
}
