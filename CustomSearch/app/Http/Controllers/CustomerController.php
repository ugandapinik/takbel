<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

class CustomerController extends Controller{

    public function index(){
        $customers = Customer::all();
        return view('customers.list', compact('customers'));
    }

    public function search(Request $request){
        if($request->ajax()){
            $output = "";
            $customers = Customer::where('firstname', 'LIKE', '%'. $request->search .'%')
                            ->orWhere('lastname', 'LIKE', '%'. $request->search .'%')->get();

            if($customers){
                foreach ($customers as $index => $customer){
                    $output .='<tr>'
                            . '<td>' . ++$index . '</td>'
                            . '<td>' . $customer->firstname . ' '. $customer->lastname .'</td>'
                            . '<td>' . $customer->email .'</td>'
                            . '<td>' . $customer->mobile .'</td>'
                            . '<td>$'. $customer->salary .'</td>'
                            . '<td>' . $customer->location .'</td>'
                            . '<td></td>'
                        . '</tr>';
                }

                return Response($output);
            }


        }//end if

    }
}
