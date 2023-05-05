<?php

declare(strict_types=1);

namespace App\Http\Controllers\CRM;

use App\Http\Controllers\Controller;
use App\Http\Requests\CRM\CustomerFormRequest;
use App\Http\Requests\CRM\CustomerUpdateFormRequest;
use App\Models\CRM\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{


    public function index()
    {
        $customers = Customer::list()->get();

        return view('CRM.Customers.List.index', compact('customers'));
    }

    public function create()
    {
        return view('CRM.Customers.Create.index');
    }

    public function store(CustomerFormRequest $request)
    {
        DB::beginTransaction();
        try {

            Customer::create($request->validated());

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollback();

            info($ex);
            return redirect(route('admin:customers.index'))->with('error', 'error !');
        }
        return redirect(route('admin:customers.index'))->with('success', 'Le Client a été crée avec success');
    }

    public function edit(Customer $customer)
    {
        return view('CRM.Customers.Edit.index', compact('customer'));
    }

    public function update(CustomerUpdateFormRequest $request, Customer $customer)
    {
        DB::beginTransaction();
        try {

            Customer::findUuid($customer->uuid)->update($request->validated());

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollback();

            info($ex);
            return redirect(route('admin:customers.index'))->with('error', 'error !');
        }
        return redirect(route('admin:customers.index'))->with('success', 'Le Client a été Modifier avec success');
    }

    public function delete(Request $request)
    {
        $request->validate(['customerId' => ['required', 'uuid']]);

        $customer = Customer::findUuid($request->customerId)->firstOrFail();

        if ($customer) {

            $customer->delete();

            return redirect(route('admin:customers.index'))->with('success', 'Le Client a été supprmers avec success');
        }
        return redirect(route('admin:customers.index'))->with('error', 'Error !!');
    }
}
