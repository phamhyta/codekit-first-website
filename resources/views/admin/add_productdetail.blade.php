@extends('admin.adminLayout')
@section('adminContent')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thông tin màu, size sản phẩm 
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
                        <form role="form" action="{{ URL::to('/admin/save_productdetail') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tên sản phẩm</label>
                                <select name="id_product" class="form-control input-sm m-bot15">
                                    @foreach( $add_productdetail as $val)
                                           <option value="{{$val->id_product}}">{{$val->product_name}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="color">Chọn màu: </label>
                                <select name="id_color" id="color" class="form-control input-sm m-bot15">
                                    @foreach ($colors as $color)

                                    <option value="{{ $color->id_color }}" class="tw-w-full tw-flex tw-whitespace-nowrap tw-justify-between" style="background-color: {{ $color->hex }}">
                                        <div class="tw-w-5/12 tw-h-full tw-border-2">
                                            {{ $color->color_name }}
                                        </div>
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail2">Ảnh nền: </label>
                                <input type="file" name="thumbnail" class="form-control" id="exampleInputEmail2" placeholder="Hình ảnh sản phẩm">
                            </div>

                            <div class="form-group">
                                <label for="size">Chọn size:</label>
                                <input type="text" name="size" id="size">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình ảnh chi tiết: </label>
                                <input type="file" name="url_image[]" class="form-control" id="exampleInputEmail1" placeholder="Hình ảnh sản phẩm" multiple>
                            </div>
                            <button type="submit" name="add_productdetail" class="btn btn-info">Thêm sản phẩm</button>
                        </form>
                    </div>
                </div>
            </section>

    </div>
</div>
@endsection