@extends('admin.main')
@section('content')
<form action="" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mã lớp học</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập mã lớp học">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tên lớp học</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nhập tên lớp học">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nhập mô tả lớp học">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Số lượng sinh viên</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nhập số lượng sinh viên">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
@endsection