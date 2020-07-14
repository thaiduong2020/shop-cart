<?php

namespace App\Http\Controllers;
use App\Theloai;
use App\User;
use Illuminate\Http\Request;

class TheloaiController extends Controller
{
    public function index(){
        $user = User::all();
        $list = Theloai::paginate(10);
        return view('admin.theloai.list-theloai', ['list' => $list,'user' => $user]);
    }

    public function getCreate(){
        return view('admin.theloai.add-theloai');
    }

    public function postCreate(Request $request){
        $this->validate($request,[
            'name' => 'required'
        ],[
            'name.required' => 'Vui lòng nhập tên thể loại'
        ]
       
    );
    $theloai = new Theloai;
    $theloai->name =  $request->name;
    $theloai->save();
    return redirect('admin/add-theloai')->with('thongbao', 'Thêm mới thành công');
    }

    public function getEdit($id){
        $theloai = Theloai::find($id);
        return view('admin.theloai.edit-theloai',['theloai' => $theloai]);
    }
    public function postEdit(Request $request, $id){
        $this->validate($request,[
            'name' => 'required|unique:theloai,name'
        ],[
            'name.required' => 'Vui lòng nhập tên thể loại',
            'name.unique' => 'Tên thê loại này đã có. xin vui lòng nhập tên khác'
        ]);

        $theloai = Theloai::find($id);
        $theloai->name = $request->name;
        $theloai->save();
        return redirect('admin/edit-theloai/'.$theloai->id)->with('thongbao', 'Cập nhật thành công');
    }

    public function postDelete($id){
        $theloai = Theloai::find($id);
        $theloai->delete();
        return redirect('admin/list-theloai/')->with('thongbao', 'xóa thành công thành công');

    }
}
