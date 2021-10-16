@extends('admin.adminLayout')
@section('adminContent')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật trạng thái đơn hàng
                </header>
                <div class="panel-body">
                    <?php
                        $message = Session::get('bill_noti');
                        if($message){
                        echo $message;
                        session::put('bill_noti', null);
                    }
                    ?>
                    @foreach ($edit_bill as $key => $edit_value)
                    <div class="position-center">
                        <form role="form" action="{{ URL::to('/admin/update_bill/'.$edit_value->id_bill_detail) }}" method="post">
                            {{ csrf_field() }}    
                            <div class="form-group">
                                <label for="exampleInputPassword1">Họ tên</label>
                                <div>{{$edit_value->full_name}}</div> 
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tên đăng nhập</label>
                                <div>{{$edit_value->username}}</div> 
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Ngày đặt hàng</label>
                                <div>{{$edit_value->create_date}}</div> 
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Ngày giao dự kiến</label>
                                <div>{{$edit_value->delivery_date}}</div> 
                            </div>

                        <div class="form-group">
                            <label for="color">Trạng thái đơn hàng </label>
                            <select name="id_status" id="color" class="form-control input-sm m-bot15">
                                @foreach ($status as $status)
                                    @if ($status->id_status == $edit_value->id_status)
                                        <option value="{{ $status->id_status }}" selected class="tw-w-full tw-flex tw-whitespace-nowrap tw-justify-between">
                                            <div class="tw-w-5/12 tw-h-full tw-border-2">
                                                {{ $status->status_name }}
                                            </div>
                                        </option>
                                    @else
                                        <option value="{{ $status->id_status }}" class="tw-w-full tw-flex tw-whitespace-nowrap tw-justify-between">
                                            <div class="tw-w-5/12 tw-h-full tw-border-2">
                                                {{ $status->status_name }}
                                            </div>
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" name="update_bill" class="btn btn-info">Cập nhật</button>
                    </form>
                    </div>
                    @endforeach
                </div>
            </section>

    </div>
</div>
@endsection