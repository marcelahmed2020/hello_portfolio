<?php
namespace App\Http\Controllers\Dashboard\Clients;
use App\Category;
use App\Orders;
use App\Product;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class OrdersController extends Controller
{
    public function AllOrders(){
          $orders = Orders::get();
        return  view('admin.users.orders.all_orders',compact(['orders']));
     }
    public function index($id)
    {
       $user =  User::findOrFail($id);
       $categories = Category::get();
//        $user->orders
       return  view('admin.users.orders.index',compact(['user','categories']));

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
         $client =  User::findOrFail($id);
        $this->add_order($request,$client,$order = []);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('admin.all.orders');
    }
    public function showTime($id){
        $order  =  Orders::findOrFail($id);
        $order_show  =  $order->products;
//        dd($order_show);
        return  view('admin.users.orders._show',compact(['order_show','order']));


    }
    public function edit($user,$order)
    {
        $user        =  User::findOrFail($user);
        $categories  =  Category::get();
        $orders      =  Orders::findOrFail($order);

        return  view('admin.users.orders._edit',compact(['user','categories','orders']));
    }
    public function update(Request $request, $user,$ord)
    {
        $order  =  Orders::findOrFail($ord);
        $this->delete_order($order);
        $client =  User::findOrFail($user);
        $this->add_order($request,$client,$order);
        session()->flash('success', __('site.updated_successfully'));
        return back();
    }
    public function destroy($user,$id)
    {
        $order  =  Orders::findOrFail($id);
        $this->delete_order($order);
        $order->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('admin.all.orders');

    }
    public function create()
    {
        // No need For This
        abort(404);
    }
    private function add_order($request,$client,$order){
        $request->validate([
            'quantities' => 'required|array',
            'products' => 'required|array'
        ]);
         if (empty($order)){
             $order = $client->orders()->create([]);
         }

        $total_price = 0;
        foreach ($request->products as $key => $val){
            $product = Product::findOrFail($val);
            $total_price += $product->sale_price * $request->quantities[$key];
            $order->products()->attach($val,['quantity'=>$request->quantities[$key]]);
            $product->update([
                'stock' => $product->stock  - $request->quantities[$key]
            ]);
        }
        $order->update([
            'total_price' => $total_price
        ]);
    }
    private function delete_order($order){
        foreach ($order->products as $produ){
            $produ->update([
                'stock' => $produ->stock + $produ->productor->quantity
            ]);
            $produ->productor()->delete();
        }
    }


}
