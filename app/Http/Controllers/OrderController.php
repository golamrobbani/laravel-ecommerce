<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;

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
use Illuminate\Support\Facades\Storage;
use Mail;
use App\Mail\OrderPlace;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class OrderController extends Controller
{


    public function create(Request $request){
        $user = Auth::user();
        if($user) {
            // validate the params send from the user
            $data = [
                'delivery_address'  => $request->delivery_address,
                'delivery_area' => $request->delivery_area,
                'delivery_charge' => $request->delivery_charge,
                'delivery_city' => $request->delivery_city,
                'delivery_phone' => $request->delivery_phone,
                'offer_status' => $request->offer_status,
                'payment_method' => $request->payment_method,
                'products' => $request->products
            ];

            $valid =  Validator::make($data, [
                'delivery_address' => 'required',
                'delivery_area' => 'required',
                'delivery_charge' => 'required|number',
                'delivery_city' => 'required',
                'delivery_phone' => 'required',
                'offer_status' => 'required',
                'payment_method' => 'required',
                'products' => 'required'
            ]);

            if($valid){
                // insert valid order data to DB
                if($request->payment_method == 'Cash On Delivery'){
                    $payment_number = 'na';
                }else{
                    $payment_number = $request->payment_number;
                }

                if($request->offer_status == 'yes'){
                    $offer_id = $request->offer['id'];
                    $offer_amount = $request->offer_amount;
                }else{
                    $offer_id = '';
                    $offer_amount = 0;
                }

                $total_payable = 0;
                $total_product_price = 0;

                foreach($request->products as $product){
                    $total_product_price += ($product["qty"] * $product["price"]);
                }

                $total_payable = ($total_product_price + $request->delivery_charge) - $offer_amount;

                $order_number = mt_rand(100000, 999999);

                // create record to order table
                $order = new Order;
                $order->order_number = $order_number;
                $order->order_status = 2;
                $order->order_date  = date("Y-m-d h:i");
                $order->order_price_total = $total_product_price;
                $order->order_payment_type = $request->payment_method;
                $order->order_delivery_city = $request->delivery_city;
                $order->order_delivery_address = $request->delivery_address;
                $order->order_delivery_postcode = $request->delivery_postcode;
                $order->order_delivery_phone = $request->delivery_phone;
                $order->order_discount = $offer_amount;
                $order->order_payment_status = 2;
                $order->order_customer_id = $user->id;
                $order->order_total_payable = $total_payable;
                $order->order_delivery_charge = $request->delivery_charge;
                $order->save();

                $order_id = $order->id;


                foreach($request->products as $product){
                    $item = new OrderItem;
                    $item->order_id = $order_id;
                    $item->customer_id = $user->id;
                    $item->item_id = $product["id"];
                    $item->item_name = $product["name"];
                    $item->item_qty = $product["qty"];
                    $item->item_price = $product["price"];
                    $item->item_price_total = ($product["price"] * $product["qty"]);
                    $item->save();
                }


                $order['products'] = $request->products;
                $shop = Configuration::find(1);
                $order['shop'] = $shop;
                $order['user'] = $user;
                // create pdf invoice of this order

                $pdf = PDF::loadView('pdf.invoice', array('order' => $order));
//                $download = $pdf->download('invoice.pdf');

                Storage::put('public/pdf/invoice.pdf', $pdf->output());

                // send email notification to user and admin about the order

              Mail::to($user->email)->bcc($shop->shop_email)->send(new OrderPlace($order));



                return response()->json(['status' => 'success', 'order_id' => $order_id ,'msg' => 'Your order submitted successfully.'], 200);


            }else{
                return response()->json(['status' => 'failed','msg' => 'Your order information not valid. Please try again!'], 200);
            }

        }else{
            return response()->json(['status' => 'login','msg' => 'You need to login to submit the order!'], 200);
        }
    }



}
