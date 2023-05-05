<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Service\LopMonHocService;
use App\Http\Requests\LopCreateRequest;

class LopMonHocController extends Controller
{
    //
    protected $lopmonhocService;

    public function __construct(LopMonHocService $lopmonhocService)
    {
        $this->lopmonhocService = $lopmonhocService;
    }

    public function create(){
        return view('admin.lopmonhoc.add',[
            'title'=>'Thêm mới lớp môn học'
        ]);
    }
    public function store(LopCreateRequest $request){
        //xu ly them moi lop mon hoc
        //dd($request->input());
        $result = $this->lopmonhocService->create($request);
        return redirect()->back();
    }
}
