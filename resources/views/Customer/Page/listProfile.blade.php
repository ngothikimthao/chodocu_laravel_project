@extends('Customer.Layout.master')
@section('content')
<div class="wrapper row3">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="bang">
        <table class="table table-striped table-bordered table-hover">
          <thead style="color: red;font-size: 20px;padding: 100px;">
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Password</th>
              <th>Address</th>
              <th>Avata</th>
              <th>Status</th>
              <th style="width: 20%">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($profile as $value)
            <tr>
              <td> {!! $value["name"] !!} </td>
              <td> {!! $value["email"] !!} </td>
              <td> {!! $value["phone"] !!} </td>
              <td> {!! $value["password"] !!} </td>
              <td> {!! $value["address"] !!} </td>
              <td>
                <img src="{!! asset('public/img/user/'.$value['avata']) !!}" style="width: 40px;height: 40px;" alt="{!! $value["name"] !!}">
              </td>
              <td> {!! $value["status"] !!} </td>
              <td>
                <a href="{!! url('edit',$value['id']) !!}"><i class="fa fa-pencil"></i>&nbsp;Sửa</a>&nbsp;&nbsp;
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    </div>
</div>
@endsection