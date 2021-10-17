@extends('admin.adminLayout')
@section('adminContent')
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Hiện thị đơn hàng
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
              <th>Họ tên</th>
              <th>Tên đăng nhập</th>
              <th>Sản phẩm</th>
              <th>Ngày đặt</th>
              <th>Ngày giao</th>
              <th>Trạng thái đơn hàng</th>
              <th style="width:30px;"></th>
            </tr> 
          </thead>
          <tbody>
            @foreach ( $all_bill as $key => $bill)
            <tr>
              <th style="width:20px;">
                {{-- <label class="i-checks m-b-none">
                  <input type="checkbox"><i></i>
                </label> --}}
              </th>
              {{-- <td>0p<label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> --}}
              <td>{{ $bill-> full_name }}</td>
              <td>{{ $bill-> username }}</td>
              <td>
                <a href = "/admin/bill_detail/{{ $bill ->id_bill_detail }}"> Chi tiết </a>
              </td>
              <td>{{ $bill-> create_date }}</td>
              <td>{{ $bill-> delivery_date }}</td>
              <td>{{ $bill-> status_name }}</td>
              <td>
                <a href="{{ URL::to('/admin/edit_bill/'.$bill ->id_bill_detail) }}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i>
                <a onclick="return confirm('Bạn có chắc là muốn xóa bill này?')" href="{{ URL::to('/admin/delete_bill/'.$bill ->id_bill_detail) }}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>  
              </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <footer class="panel-footer">
        <div class="row">
          <div class="tw-text-center">
            {{ $all_bill->links() }}
          </div>
        </div>
      </footer>
    </div>
  </div>
@endsection