<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobile;
use App\Models\Customer;


class CustomerController extends Controller
{
    public function add_customer(){
        $mobile = new Mobile();
        $mobile->model = 'BLURDSV';

        $customer = new Customer();
        $customer->name = 'Fosv';
        $customer->email = 'tosmdeg@ggv.com';

        $customer->save();

        $customer->mobile()->Save($mobile);
    }

    public function show_mobile($id){
        $mobile = Customer::find(1)->mobile;
        return $mobile;
    }
}
