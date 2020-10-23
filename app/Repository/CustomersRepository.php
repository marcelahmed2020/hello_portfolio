<?php
namespace App\Repository;
use  App\Customers;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
class CustomersRepository implements InterfaceCustomers
{
   public function all(){
                $customer = Customers::get();
                return $customer->map->format();
                       // return $customer->map(function($customer){
                                     // return $customer->format();
                              // });
  }
   public function show_b($id)
   {
      $customer = Customers::where('id',$id)
          ->first();
          return $customer->format();
   }
}
