@extends('admin.adminLayout')
@section('adminContent')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật thông tin màu sắc và kích thước sản phẩm
                </header>
                <div class="panel-body">
                    <?php
                        $message = Session::get('detail_noti');
                        if($message){
                        echo $message;
                        session::put('detail_noti', null);
                    }
                    ?>
                    @foreach ($edit_productdetail as $key => $edit_value)
                    <div class="position-center">
                        <form role="form" action="{{ URL::to('/admin/update_productdetail/'.$edit_value->id_product_detail) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}    
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên sản phẩm</label>
                            <div>{{$edit_value->product_name}}</div>
                            
                        </div>
                        <div class="form-group">
                            <label for="color">Chọn màu: </label>
                            <select name="id_color" id="color" class="form-control input-sm m-bot15">
                                @foreach ($colors as $color)
                                    @if ($color->id_color == $edit_productdetail[0]->id_color)
                                        <option value="{{ $color->id_color }}" selected class="tw-w-full tw-flex tw-whitespace-nowrap tw-justify-between" style="background-color: {{ $color->hex }}">
                                            <div class="tw-w-5/12 tw-h-full tw-border-2">
                                                {{ $color->color_name }}
                                            </div>
                                        </option>
                                    @else
                                        <option value="{{ $color->id_color }}" class="tw-w-full tw-flex tw-whitespace-nowrap tw-justify-between" style="background-color: {{ $color->hex }}">
                                            <div class="tw-w-5/12 tw-h-full tw-border-2">
                                                {{ $color->color_name }}
                                            </div>
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail2">Ảnh nền: </label>
                            <input type="file" name="thumbnail" class="form-control" id="exampleInputEmail2" placeholder="Hình ảnh sản phẩm">
                            <img src="{{URL::to('img/anh_giay_nam/'.$edit_value->thumbnail)}}" height="100" width="100">
                        
                        </div>
                        <div class="form-group">
                            <label for="size">Chọn size:</label>
                            <input type="text" name="size" id="size" value="{{$edit_value->product_size}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                            <input type="file" name="product_image[]" class="form-control" id="exampleInputEmail1" multiple>
                            <img src="{{URL::to('img/anh_giay_nam/'.$edit_value->url_image)}}" height="100" width="100">
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