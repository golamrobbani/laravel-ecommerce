<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\OfferCoupon;

class CouponController extends Controller
{

    public function check_coupon($coupon = null, $total = null){

        $user = Auth::user();
        if($user){
            $currentDateTime = date('Y-m-d H:i:s');
            $result = OfferCoupon::where('coupon_code',$coupon)
                ->where('coupon_minimum_price','<',$total)
                ->where('coupon_isEnable','=','yes')
                ->where('coupon_expiry_date','>',$currentDateTime)
                ->first();

            if($result){
                if($result->coupon_number > $result->coupon_use){
                    if($result->coupon_value_type == 'fixed'){
                        $amount = $result->coupon_amount;
                    }else{
                        $amount = ($total * $result->coupon_amount) / 100;
                    }
                    return response()->json(['status' => 'success', 'msg' => 'Congratulations you got the discount','data' => $result, 'amount' => $amount], 200);
                }else{
                    return response()->json(['status' => 'failed','msg' => 'Coupon code is already used!'], 200);
                }
            }else{
                return response()->json(['status' => 'failed','msg' => 'Invalid coupon code or does not match coupon requirment!'], 200);
            }
        }else{
            return response()->json(['status' => 'login','msg' => 'You need to login to apply coupon code'], 200);
        }

    }

}