<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;


class nlckhoacontroller extends Controller
{
    //doc du lieu tu bang khoa 
    public function nlcgetallkhoa()
    {
        // truy van du lieu tu bang khoa
        $nlckhoas =DB::select('Select * from nlckhoa');
        // chuyen du lieu len view de hien thi
        return view('nlckhoa.nlclist',['nlckhoa'=>$nlckhoas]);
    }
    //chi tiet khoa
    public function nlcgetkhoa($makh)
    {
        $khoa =DB::select('select *from nlckhoa where nlcmakhoa=?',[$makh])[0];
        return view('nlckhoa.nlcdetail',['khoa'=>$khoa]);

    }
    #edit
    public function nlcedit($makh)
    {
    $khoa =DB::select('select *from nlckhoa where nlcmakhoa=?',[$makh])[0];
        return view('nlckhoa.nlcedit',['khoa'=>$khoa]);
    }
    #edit submit
    public function nlceditsubmit( request $request)
    {
        //lay du lieu moi tren form sua
        $makh= $request->input('nlcmakhoa');
        $tenkh= $request->input('nlctenkhoa');
        DB::update("UPDATE nlckhoa SET nlctenkhoa =? where nlcmakhoa=?",[$makh,$tenkh]);
        return redirect('/khoa');
    }
    //insert -get 
    public function nlcinsert()
    {
        return  view('nlckhoa.nlcinsert');
    }
    
    //insert -submit
    public function nlcinsertsubmit(request $request)
    {
        //kiem tra du lieu
        $validate = $request->validate([
        'nlcmakhoa' => 'required|max:2',
        'nlctenkhoa' =>'required|max:50'
        ],
        [
            'nlcmakhoa.requied' =>'vui long nhapj ma khoa.',
            'nlcmakhoa.max' =>'ma khoa toi da 2 ky tu ',
            'nlctenkhoa.requied' =>'vui long nhap ten  khoa.',
            'nlctenkhoa.max'=>'ten khoa toi da 50 ki tu',


        ]
    );
        //lay du lieu tren form
        $makh =$request ->input('nlcmakhoa');
        $tenkh =$request ->input('nlctenkhoa');
        //ghi du lieu xuong database
        DB::insert('insert into nlckhoa (nlcmakhoa, nlctenkhoa) values (?, ?)', [$request->$makh, $request->$tenkh]);
        //chuyen du lieu trang danh sach
        return redirect('/khoa');
    }
    //delete
    public function nlcdelete($makh)
    {
        DB::delete("delete from nlckhoa where nlcmakhoa=?",[$makh]);
        return redirect('/khoa');
    }
}
 