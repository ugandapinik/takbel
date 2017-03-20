<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //
        Customer::truncate();
        $customer1 = new Customer();
        $customer1->firstname = "Wohhie";
        $customer1->lastname = "Mahmud";
        $customer1->email = "wohhie@mail.com";
        $customer1->mobile = "01612163686";
        $customer1->salary = 5000;
        $customer1->location = "Dhaka";
        $customer1->created_at = new DateTime();
        $customer1->updated_at = new DateTime();
        $customer1->save();

        $customer1 = new Customer();
        $customer1->firstname = "Shakib";
        $customer1->lastname = "Mahmud";
        $customer1->email = "sakib@mail.com";
        $customer1->mobile = "01612138694";
        $customer1->salary = 2000;
        $customer1->location = "Mirpur";
        $customer1->created_at = new DateTime();
        $customer1->updated_at = new DateTime();
        $customer1->save();

        $customer1 = new Customer();
        $customer1->firstname = "Hosneara";
        $customer1->lastname = "Mujib";
        $customer1->email = "mujib@mail.com";
        $customer1->mobile = "016121386234";
        $customer1->salary = 3015;
        $customer1->location = "Uttara";
        $customer1->created_at = new DateTime();
        $customer1->updated_at = new DateTime();
        $customer1->save();

        $customer1 = new Customer();
        $customer1->firstname = "Monika";
        $customer1->lastname = "Hosna";
        $customer1->email = "monika@mail.com";
        $customer1->mobile = "01612145686";
        $customer1->salary = 2500;
        $customer1->location = "Motijeel";
        $customer1->created_at = new DateTime();
        $customer1->updated_at = new DateTime();
        $customer1->save();

    }
}
