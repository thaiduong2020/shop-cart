<?php

namespace App\Http\Controllers;
use App\Type_product;
use App\Theloai;
use App\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(){
        $user = User::all();
        $list = Type_product::paginate(10);
        return view('admin.category.list-category', ['list' => $list,'user' => $user]);
    }

    public function getCreate(){
        $theloai = Theloai::all();
        return view('admin.category.add-category',['theloai' => $theloai]);
    }

    public function postCreate(Request $request){
        $this->validate($request,[
            'name' => 'required'
        ],[
            'name.required' => 'Vui lòng nhập tên loại sản phẩm'
        ]
       
    );
    $type = new Type_product;
    $type->id_theloai = $request->id_theloai;
    $type->name =  $request->name;
    $type->save();
    return redirect('admin/add-category')->with('thongbao', 'Thêm mới thành công');
    }

    public function getEdit($id){
        $type = Type_product::find($id);
        $theloai = Theloai::all();
        return view('admin.category.edit-category',['type' => $type , 'theloai' => $theloai]);
    }
    public function postEdit(Request $request, $id){
        $this->validate($request,[
            'name' => 'required|unique:type_products,name'
        ],[
            'name.required' => 'Vui lòng nhập tên thể loại',
            'name.unique' => 'Tên loại tin này đã có. xin vui lòng nhập tên khác'
        ]);

        $type = Type_product::find($id);
        $type->id_theloai = $request->id_theloai;
        $type->name = $request->name;
        $type->save();

        return redirect('admin/edit-category/'.$type->id)->with('thongbao', 'Cập nhật thành công');
    }

    public function postDelete($id){
        $type = Type_product::find($id);
        $type->delete();
        return redirect('admin/list-category')->with('thongbao', 'Xóa thành công thành công');

    }

}
