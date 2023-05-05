<?php

namespace App\Http\Service;
use App\Models\LopMonHoc;
class LopMonHocService
{
    public function create($request){
        try {
            //
            LopMonHoc::create([
                'malop'=>(string)$request->input('malop'),
                'tenlop'=>(string)$request->input('tenlop'),
                'mota'=>(string)$request->input('mota'),
                'soluongsv'=>(string)$request->input('soluongsv'),
            ]);
            Session()->flash('success','Thêm mới lớp học thành công');
        }
        catch (Exception $ex){
            Session()->flash('error',$ex->getMessage());
            return false;
        }
        return true;
    }
}
