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
        //lay du lieu moi tren form usua
        $makh= $request->input('nlcmakhoa');
        $tenkh= $request->input('nlctenkhoa');
        DB::update("UPDATE nlckhoa SET nlctenkhoa =? where nlcmakhoa=?",[$tenkh,$makhoa]);
        return redirect('/khoa');
    }
}
 