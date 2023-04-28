<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LopMonHocController extends Controller
{
    //
    public function create(){
        return view('admin.lopmonhoc.add',[
            'title'=>'Thêm mới lớp môn học'
        ]);
    }
}
