<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Bill_detail;
class BillController extends Controller
{
    public function getList(){

        $bill = Bill_detail::paginate(6);
        return view('admin.bill.list-bill',compact('bill'));
    }
    public function postDelete($id){
        $bill = Bill_detail::find($id);
        $bill->delete();
        return redirect()->back()->with('thongbao','Xóa đơn hàng thành công') ;
    }
}
