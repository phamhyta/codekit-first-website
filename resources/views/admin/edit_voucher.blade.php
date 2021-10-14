@extends('admin.adminLayout')
@section('adminContent')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật thông tin voucher
                </header>
                <div class="panel-body">
                    <?php
                        $message = Session::get('voucher_noti');
                        if($message){
                        echo $message;
                        session::put('voucher_noti', null);
                    }
                    ?>
                    @foreach ($edit_voucher as $key => $edit_value)
                    <div class="position-center">
                        <form role="form" action="{{ URL::to('/admin/update_voucher/'.$edit_value->id_voucher) }}" method="post">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả voucher</label>
                            <input type="text" value="{{ $edit_value->voucher_desc }}" name="voucher_desc" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phần trăm</label>
                            <input type="text" value="{{ $edit_value->percent }}" name="percent" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giảm giá</label>
                            <input type="text" value="{{ $edit_value->decrease }}" name="decrease" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ngày có hiệu lực</label>
                            <input type="datetime" value="{{ $edit_value->create_at }}" name="create_at" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">HSD</label>
                            <input type="datetime" value="{{ $edit_value->HSD }}" name="HSD" class="form-control" id="exampleInputEmail1">
                        </div>
                        <button type="submit" name="update_voucher" class="btn btn-info">Cập nhật</button>
                    </form>
                    </div>
                    @endforeach
                </div>
            </section>

    </div>
</div>
@endsection