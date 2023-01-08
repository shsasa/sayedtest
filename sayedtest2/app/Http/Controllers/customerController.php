<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class customerController extends Controller
{



    public function firstSpent()
    {
        $customers = Customer::with(['payments'])->get();

        $maxAmount = 0;
        $firstCustomer = null;
        foreach ($customers as $customer) {
            $totalAmount = $customer->payments->sum(function ($payment) {
                return $payment->amount;
            });
            if ($totalAmount > $maxAmount) {
                $maxAmount = $totalAmount;
                $firstCustomer = $customer;
            }
        }
        return $firstCustomer;
    }


    public function firstOrders(){
        $customers = Customer::with(['orders'])->get();

        $maxOrders = 0;
        $firstCustomer = null;
        foreach ($customers as $customer) {
            $numOrders = $customer->orders->count();
            if ($numOrders > $maxOrders) {
                $maxOrders = $numOrders;
                $firstCustomer = $customer;
            }
        }
        return $firstCustomer;
    }


public function firsttwo(){
    return view('first', [
        'firstSpent' => $this->firstSpent(),
        'firstOrders' => $this->firstOrders(),
    ]);
}

}
