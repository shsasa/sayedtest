<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{


    use HasFactory;
    
    protected $fillable = [
        'customerNumber',
        'customerName',
        'contactLastName',
        'contactFirstName',
        'phone',
        'addressLine1',
        'addressLine2',
        'city',
        'state',
        'postalCode',
        'country',
        'salesRepEmployeeNumber',
        'creditLimit',
    ];  
    
    
    public function orders()
    {
        return $this->hasMany('App\Models\Order', 'customerNumber', 'customerNumber');
    }

    public function payments()
    {
        return $this->hasMany('App\Models\Payment' , 'customerNumber', 'customerNumber');
    }
}
