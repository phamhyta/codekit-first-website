@extends('admin.adminLayout')
@section('adminContent')
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Hiện thị khách hàng
      </div>
      <div class="row w3-res-tb">
        <div class="col-sm-5 m-b-xs">
          <select class="input-sm form-control w-sm inline v-middle">
            <option value="0">Thể thao</option>
            <option value="1">Du lịch</option>
            <option value="2">Trong nhà</option>
            <option value="3">Đi học</option>
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
                {{-- <label class="i-checks m-b-none">
                  <input type="checkbox"><i></i>
                </label> --}}
              </th>
              <th>Username</th>
              <th>Email</th>
              <th>Full_name</th>
              <th>SĐT</th>
              <th>Địa chỉ</th>
              <th style="width:30px;"></th>
            </tr> 
          </thead>
          <tbody>
            @foreach ( $all_category as $key => $cate_pro)
            <tr>
              <th style="width:20px;">
                {{-- <label class="i-checks m-b-none">
                  <input type="checkbox"><i></i>
                </label> --}}
              </th>
              {{-- <td>0p<label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> --}}
              <td>{{ $cate_pro-> product_name }}</td>
              <td>
                <?php
                  if($cate_pro-> id_category==1){
                    echo 'Thể thao';
                  }
                  if($cate_pro-> id_category==2){
                    echo 'Du lịch';
                  }
                  if($cate_pro-> id_category==3){
                    echo 'Trong nhà';
                  }
                  if($cate_pro-> id_category==4){
                    echo 'Đi học';
                  }
                ?>
              </td>
              <td>{{ $cate_pro-> description }}</td>
              <td>
                <?php
                  if($cate_pro-> id_class==1){
                    echo 'Nam';
                  }
                  if($cate_pro-> id_class==2){
                    echo 'Nữ';
                  }
                  if($cate_pro-> id_class==3){
                    echo 'Trẻ em';
                  }
                ?>
              </td>
              <td>{{ $cate_pro-> price }}</td>
              <td>{{ $cate_pro-> discount }}</td>
              <td>
                <a href="{{ URL::to('/admin/edit_category/'.$cate_pro ->id_product) }}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i>
                <a onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này?')" href="{{ URL::to('/admin/delete_category/'.$cate_pro->id_product) }}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>  
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
            {{ $all_category->links() }}
          </div>
        </div>
      </footer>
    </div>
  </div>
@endsection