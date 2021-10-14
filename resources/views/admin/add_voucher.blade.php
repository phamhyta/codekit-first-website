@extends('admin.adminLayout')
@section('adminContent')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Voucher
                </header>
                <div class="panel-body">
                    <?php
                        $message = Session::get('voucher_noti');
                        if($message){
                        echo $message;
                        session::put('voucher_noti', null);
                    }
                    ?>
                    <div class="position-center">
                        <form role="form" action="{{ URL::to('/admin/save_voucher') }}" method="post">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả voucher</label>
                            <input type="text" name="voucher_desc" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phần trăm</label>
                            <input type="text" name="percent" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giảm giá</label>
                            <input type="text" name="decrease" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ngày có hiệu lực</label>
                            <input type="datetime-local" name="effective_date" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">HSD</label>
                            <input type="datetime-local" name="HSD" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
                        </div>
                        <button type="submit" name="add_voucher" class="btn btn-info">Thêm voucher</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
</div>
@endsection