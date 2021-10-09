@extends('admin.adminLayout')
@section('adminContent')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật thông tin sản phẩm
                </header>
                <div class="panel-body">
                    <?php
                        $message = Session::get('message');
                        if($message){
                        echo $message;
                        session::put('message', null);
                    }
                    ?>
                    @foreach ($edit_category as $key => $edit_value)
                    <div class="position-center">
                        <form role="form" action="{{ URL::to('/admin/update_category/'.$edit_value->id_product) }}" method="post">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" value="{{ $edit_value->product_name }}" name="category_name" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                            <textarea class="form-control" style="resize: none" rows="5" name="category_desc" id="exampleInputPassword1">{{ $edit_value->description }}</textarea>
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
                            <input type="text" name="price" value="{{ $edit_value->price }}" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sau giảm giá</label>
                            <input type="text" name="discount" value="{{ $edit_value->discount }}" class="form-control" id="exampleInputEmail1">
                        </div>
                        <button type="submit" name="update_category" class="btn btn-info">Cập nhật</button>
                    </form>
                    </div>
                    @endforeach
                </div>
            </section>

    </div>
</div>
@endsection