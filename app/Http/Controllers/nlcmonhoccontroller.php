<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\Validation\Validator;



class nlcmonhoccontroller extends Controller
{
    // doc du lieu tu ban mon hoc
    public function getallmonhoc()
    {
        $nlcmonhocs =DB::select('Select * from nlcmonhoc');
        return view ('nlcmonhoc.nlclistmonhoc',['nlcmonhocs'=>$nlcmonhocs]);
    }
    //chi tiet mon hoc
    public function getmonhoc($mamh)
    {
        $nlcmonhocs =DB::select('select *from nlcmonhoc where nlcmamh=?',[$mamh])[0];
        return view('nlcmonhoc.nlcdetailmonhoc',['nlcmonhocs'=>$nlcmonhocs]);
        
        
    }
    //insert form
    public function getinsert()

    {
        return view('nlcmonhoc.nlcinsertmonhoc');
    }
    public function getinsertsubmit(request $request )
    {
        //kiem tra du leu 
        $validatedData =$request ->validate([
            'nlcmamh' =>'required|string|max:3',
            'nlctenmh'=>'requied|max50',
            'nlcsotiet' =>'requied|max:10',
        ],
        [
            'nlcmamh.requied' =>'vui long nhapj ma khoa.',
            'nlctenmh.max' =>'ma khoa toi da 2 ky tu ',
            
            'nlctenmh.max'=>'ten khoa toi da 50 ki tu',


        ]
        );
        $mamh=$request->input('nlcmamh');
        $tenmh=$request->input('nlctenmh');
        $sotiet=$request->input('nlcsotiet');
        DB::insert('insert into nlcmonhoc (nlcmamh, nlctenmh,nlcsotiet) values (?, ?,?)', [$request->$mamh, $request->$tenmh,$request->$sotiet]);
        
       
        return redirect('/monhoc');
        
    }
    
    
}
