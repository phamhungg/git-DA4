<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;

class quantridanhmuc extends Controller
{
    public function danhmuc(){
        $danhmuc = menu::paginate(5);
        if($key=request()->key){
            $danhmuc= menu::where('TenDanhMuc','like','%'.$key.'%')->paginate(5);
        }
        return view('admin.Danhmuc.danhmuc',['danhmuc' => $danhmuc])->with('1',(request()->input('page',1)-1)*5);
    }
    public function store(Request $req)
    {
        
            $tieude = new menu();
            $tieude->TenDanhMuc = $req->input('TenDanhMuc');
            $tieude->save();
    //    chitiet::created($req->all());
    
       return redirect()->route('admin.Danhmuc.danhmuc');
    }

    public function create()
    {  
    return view('admin.Danhmuc.create');
    }

    public function Destroy($id)
    {
        menu::find($id)->delete();
        return redirect()->route('admin.Danhmuc.danhmuc');
    }
    public function edit($id)
    {

       $db= menu::find($id);
        return view('admin.Danhmuc.edit',['sp'=>$db]);
    }
    public function save(Request $res, $id)
    {
        $pro =  menu::find($id);
        $pro->TenDanhMuc=$res->TenDanhMuc;
        $pro->save();
       return redirect()->route('admin.Danhmuc.danhmuc');
    }
}
