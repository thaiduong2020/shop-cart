<?php

namespace App\Http\Controllers;
use App\Type_product;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Cart;
use App\Bills;
use App\Bill_detail;
use App\Customer;
class CartController extends Controller
{
    public function addCart(Request $request,$id){
        $type = Type_product::all();
        $product = Product::find($id);
            $oldCart = Session('Cart') ? Session::get('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->Add($product,$id);
            $request->session()->put('Cart',$newCart);
        return redirect()->back();
    }

    public function deleteCart($id){
        $oldCart = Session('Cart') ? Session::get('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->removeItem($id);
        if(count($newCart->items) > 0){
            Session()->put('Cart', $newCart);
        }
        else{
            Session::forget('Cart');
        }
        return redirect()->back();
    }

    public function viewCart(){
        $type = Type_product::all();
        return view('client.cart',compact('type'));
    }

    public function getCheckout(){
        $type = Type_product::all();
        return view('client.check_out',compact('type'));
    }

    public function postCheckout(Request $request)
    {
        $cart = Session::get('Cart');
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->gender = $request->gender;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->save();

        $bill = new Bills;
        $bill->id_customer = $customer->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->payment = $request->payment;
        $bill->note = $request->note;

        $bill->save();


        foreach($cart->items as $key => $value){
            $bill_detail = new Bill_detail;
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_products = $key;
            $bill_detail->quantity = $value['qty'];
            $bill_detail->price = $value['price'];
            $bill_detail->save();
        }
        Session::forget('Cart');
        return redirect()->back()->with('thongbao','Đặt hàng thành công');


    }
}
