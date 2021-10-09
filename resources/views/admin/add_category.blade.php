@extends('admin.adminLayout')
@section('adminContent')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thông tin sản phẩm
                </header>
                <div class="panel-body">
                    <?php
                        $message = Session::get('message');
                        if($message){
                        echo $message;
                        session::put('message', null);
                    }
                    ?>
                    <div class="position-center">
                        <form role="form" action="{{ URL::to('/admin/save_category') }}" method="post">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                            <textarea class="form-control" style="resize: none" rows="5" name="category_desc" id="exampleInputPassword1" placeholder="Mô tả..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Thể loại</label>
                            <select name="category_status1" class="form-control input-sm m-bot15">
                                <option value="1">Thể thao</option>
                                <option value="2">Du lịch</option>
                                <option value="3">Đi học</option>
                                <option value="4">Trong nhà</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phân loại</label>
                            <select name="category_status2" class="form-control input-sm m-bot15">
                                <option value="1">Nam</option>
                                <option value="2">Nữ</option>
                                <option value="3">Trẻ em</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá gốc</label>
                            <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sau giảm giá</label>
                            <input type="text" name="discount" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
                        </div>
                        <button type="submit" name="add_category" class="btn btn-info">Thêm sản phẩm</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
</div>
@endsection