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
            <option value="0">Họ tên</option>
            <option value="1">Email</option>
            <option value="2">SĐT</option>
            <option value="3">Username</option>
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
              <th>Họ Tên</th>
              <th>SĐT</th>
              <th>Địa chỉ</th>
              <th style="width:30px;"></th>
            </tr> 
          </thead>
          <tbody>
            @foreach ( $all_cus as $cus)
            <tr>
              <th style="width:20px;">
                {{-- <label class="i-checks m-b-none">
                  <input type="checkbox"><i></i>
                </label> --}}
              </th>
              {{-- <td>0p<label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> --}}
              <td>{{ $cus-> username }}</td>
              <td>{{ $cus-> email }}</td>
              <td>{{ $cus-> full_name }}</td>
              <td>{{ $cus-> phone_number }}</td>
              <td>{{ $cus-> address }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <footer class="panel-footer">
        <div class="row">
          <div class="tw-text-center">
            {{ $all_cus->links() }}
          </div>
        </div>
      </footer>
    </div>
  </div>
@endsection