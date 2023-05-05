<?php

declare(strict_types=1);

namespace App\Http\Controllers\CRM;

use App\Http\Controllers\Controller;
use App\Models\CRM\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{


    public function index()
    {
        $customers = Customer::list()->get();

        return view('CRM.Customers.List.index', compact('customers'));
    }
}
