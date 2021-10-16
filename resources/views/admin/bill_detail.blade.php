@extends('admin.adminLayout')
@section('adminContent')
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Đơn hàng chi tiết
      </div>
      <div class="row w3-res-tb">
        <div class="col-sm-5 m-b-xs">
          <select class="input-sm form-control w-sm inline v-middle">
            <option value="0">Tên Khách hàng</option>
            <option value="1">Ngày đặt</option>
            <option value="2">Ngày giao dự kiến</option>
            <option value="3">Tình trạng đơn hàng</option>
          </select>
          <button class="btn btn-sm btn-default">Apply</button>                
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-3">
          <div class="input-group">
            <input type="text" class="input-sm form-control" placeholder="Search">
            <span class="input-group-btn">
              <button class="btn btn-sm btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              <th style="width:20px;">
              </th>
              <th>Tên sản phẩm</th>
              <th>Màu sắc</th>
              <th>Size</th>
              <th>Số lượng</th>
              <th>Giá</th>
              <th></th>
              <th style="width:30px;"></th>
            </tr> 
          </thead>
          <tbody>
            @foreach ( $bill_detail as $key => $bill )
                @if( $bill->id_status > 0)
                    <tr>
                    <th style="width:20px;">
                    </th>
                    <td>{{ $bill-> product_name }}</td>
                    <td>{{ $bill-> color_name }}</td>
                    <td>{{ $bill-> product_size }}</td>
                    <td>{{ $bill-> ammount }}</td>
                    <td>{{ $bill-> discount }}</td>
                    </tr>
                @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection