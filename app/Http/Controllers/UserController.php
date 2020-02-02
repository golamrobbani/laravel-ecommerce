<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Configuration;
Use App\ProductCategory;
Use App\Page;
use App\User;
use App\Order;
use App\OrderItem;
use App\Transaction;
use Hash;
use DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{



    public function dashboard(){

        $total_order = 0;
        $total_pending = 0;
        $total_discount = 0;
        $total_spent = 0;
        $user = Auth::user();
        $orders = Order::where('order_customer_id', $user->id)->get();
        if($orders != null){
          foreach ($orders as $order) {
            $total_order += 1;
            if($order->order_status == 2){
              $total_pending += 1;
            }
            $total_discount += $order->order_discount;
            $total_spent += $order->order_total_paid;
          }
        }

        $transactions = Transaction::where('customer_id', $user->id)->get();

        $summery = ['total_order'=> $total_order, 'total_pending' => $total_pending, 'total_discount' => $total_discount, 'total_spent' => $total_spent ];

        return view("customer.pages.dashboard", ['user' => $user, 'transactions' => $transactions, 'total_order' => $total_order, 'total_pending' => $total_pending, 'total_discount' => $total_discount, 'total_spent' => $total_spent ]);

    }

    public function profile(){
        $user = Auth::user();
        return view("customer.pages.profile", ['user' => $user ]);
    }

    public function update_profile(Request $request){

        $data = [
          'name'  => $request->name,
          'phone' => $request->phone,
         ];

       $valid =  Validator::make($data, [
            'name' => 'required|string|max:255',
            'phone' => 'required|string',
        ]);

       if($valid){
            $id = Auth::user()->id;
            User::where('id', $id)->update(['name' => $request->name, 'phone' => $request->phone ]);
       }

        return redirect('myaccount/profile')->withErrors(['Account successfully updated']);

    }


    public function change_password(Request $request){

        $data = [
          'old_password'  => $request->old_password,
          'new_password' => $request->new_password,
          'password_confirmation' => $request->password_confirmation,
         ];

       $valid =  Validator::make($data, [
            'old_password' => 'required|string',
            'new_password' => 'required|string|min:6|confirmed',
        ]);

       if($valid && $request->new_password == $request->password_confirmation){

            if (Hash::check($request->old_password, Auth::user()->password)){
                $id = Auth::user()->id;
                User::where('id', $id)->update(['password' => bcrypt($request->new_password) ]);
            }
         }else{

            return redirect('myaccount/profile')->withErrors(['Passowrd update faield!']);

         }


        return redirect('myaccount/profile')->withErrors(['Passowrd successfully changed']);


       }


       public function order_history(){

          $user = Auth::user();

          $orders = DB::table('orders')
            ->leftjoin('transactions', 'orders.id', '=', 'transactions.order_id')
            ->select('orders.*', 'transactions.amount', 'transactions.transaction_no')
            ->paginate(15);

          return view("customer.pages.order-history", ['user' => $user, 'orders' => $orders ]);

       }


    public function order_details($order_id=null){

        $user = Auth::user();

        $order = DB::table('orders')
            ->leftjoin('transactions', 'orders.id', '=', 'transactions.order_id')
            ->select('orders.*', 'transactions.amount', 'transactions.transaction_no')
            ->where('orders.id', $order_id)->get();

        // $order = Order::where('id', $order_id)->where('order_customer_id', $user->id)->first();
        $items = OrderItem::where('order_id', $order_id)->where('customer_id', $user->id)->get();

        return view("customer.pages.order-details", ['user' => $user, 'order' => $order[0], 'items' => $items ]);

    }

    public function admin_order_details($order_id=null){

       // $user = Auth::user();

        $order = DB::table('orders')
            ->leftjoin('transactions', 'orders.id', '=', 'transactions.order_id')
            ->select('orders.*', 'transactions.amount', 'transactions.transaction_no')
            ->where('orders.id', $order_id)->first();

          $user = User::where('id', $order->order_customer_id)->first();

        // $order = Order::where('id', $order_id)->where('order_customer_id', $user->id)->first();
        $items = OrderItem::where('order_id', $order_id)->get();

         return view("vendor.voyager.orders.details", ['user' => $user, 'order' => $order, 'items' => $items ]);

    }



       public function order_pending(){

          $user = Auth::user();

          $orders = DB::table('orders')
            ->leftjoin('transactions', 'orders.id', '=', 'transactions.order_id')
            ->select('orders.*', 'transactions.amount', 'transactions.transaction_no')
            ->paginate(15);

          return view("customer.pages.order-pending", ['user' => $user, 'orders' => $orders ]);

       }




}
