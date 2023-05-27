<?php

namespace App\Http\Controllers;
use App\Models\chitiet;
use Illuminate\Http\Request;

class BaivietController extends Controller
{
    public function baiviet(){
        $baiviet = chitiet::paginate(5);
        return view('admin.baiviet.baiviet',['baiviet' => $baiviet])->with('1',(request()->input('page',1)-1)*5);
    }
    public function store(Request $req)
    {
        if ($req->has('Anh')){
            $file = $req-> Anh;
            $file_name = $file->getClientOriginalName();
            // dd($file_name);
            $file->move(public_path('/asset/fronts/dailyShop/img/Baiviet/'),$file_name);
        }
        $req-> merge(['Anh'=> $file_name]);
           $tieude = new chitiet();
            $tieude->Maloai = $req->input('Maloai');
            $tieude->Tenbaivet = $req->input('Tenbaiviet');
            $tieude->Anh= $req->input('Anh');
            $tieude->Chitiet = $req->input('Chitiet');
            $tieude->Ngaytao = $req->input('Ngaytao');
            $tieude->Ngaytao = date('Y-m-d H:i:s');
            $tieude->save();
    //    chitiet::created($req->all());
    
       return redirect()->route('admin.baiviet.baiviet');
    }

    public function create()
    {  
    return view('admin.baiviet.create');
    }

    public function Destroy($id)
    {
        chitiet::find($id)->delete();
        return redirect()->route('admin.baiviet.baiviet');
    }
    public function edit($id)
    {

       $db= chitiet::find($id);
        return view('admin.baiviet.edit',['sp'=>$db]);
    }
    public function save(Request $res, $id)
    {
        $pro =  chitiet::find($id);
        $pro->Tenbaivet=$res-> Tenbaivet;
        $pro->Anh=$res-> Anh;
        $pro->Chitiet=$res-> Chitiet;
        $pro->ngaytao=$res-> ngaytao;
        $pro->save();
       return redirect()->route('admin.baiviet.baiviet');
    }

}
