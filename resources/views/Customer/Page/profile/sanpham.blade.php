@extends('Customer.Layout.master')
@section('content')
<body id="top">
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <div class="group latest">
      <article class="sidebar one_quarter">
        <nav class="sdb_holder">
              <ul>
                <li><a href="{{route('baidang')}}">Bài đăng</a></li>
                <li><a href="{{route('sanpham')}}">Sản phẩm trả giá</a></li>
                <li><a href="{{route('viewprofile')}}">Thông tin cá nhân</a></li>
              </ul>
            </nav>
       </article>
        <article class="two_third">
            <h2>
            Sản phẩm trả giá
            </h2>
            <h5>
            @foreach($product as $prod)
            <div class = 'row'>
              <div class = 'col-md-8'>
                <?php
                  $image = explode('|',$prod->image);
                ?>
              <img class = 'imgchitiet' src="img/product/<?php echo $image[0]?>">
              </div>
              <div class = 'col-md-3'>
                <h3>Trả giá</h3>
                <p>ugjgjgjhkjhufysđ</p>
                <button class = 'btn btn-success'>Sửa</button>
                <button class = 'btn btn-danger'>Xóa</button>
              </div>
            </div>
            @endforeach
        </article>
  </section>
</div>
@endsection

