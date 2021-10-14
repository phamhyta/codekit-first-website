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
                        $message = Session::get('category_noti');
                        if($message){
                        echo $message;
                        session::put('category_noti', null);
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
                                    @foreach ($categorys as $category)
                                        @if ($category->id_category == $edit_value->id_category)
                                            <option value="{{ $category->id_category }}" selected>
                                                {{ $category->category_name }}
                                            </option>
                                        @else
                                            <option value="{{ $category->id_category }}">
                                                {{ $category->category_name }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Phân loại</label>
                                <select name="category_status2" class="form-control input-sm m-bot15">
                                    @foreach ($productClass as $class)
                                        @if ($class->id_class == $edit_value->id_class)
                                            <option value="{{ $class->id_class }}" selected>
                                                {{ $class->class_name }}
                                            </option>
                                        @else
                                            <option value="{{ $class->id_class }}">
                                                {{ $class->class_name }}
                                            </option>
                                        @endif
                                    @endforeach
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