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
        //xử lý exception, nếu có exception thì lấy ra message và hiển thị ra màn hình.
        catch (Exception $ex){
            Session()->flash('error',$ex->getMessage());
            return false;
        }
        return true;
    }
    public function getAll(){
        return LopMonHoc::paginate(1);
    }
}
